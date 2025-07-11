<?php

namespace Resend\ValueObjects\Transporter;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Resend;
use Resend\Enums\Transporter\ContentType;
use Resend\Enums\Transporter\Method;
use Resend\ValueObjects\ResourceUri;

final class Payload
{
    /**
     * Create a new Transporter Payload instance.
     */
    public function __construct(
        private readonly ContentType $contentType,
        private readonly Method $method,
        private readonly ResourceUri $uri,
        private readonly array $parameters = [],
        private readonly ?string $idempotencyKey = null
    ) {
        //
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function list(string $resource): self
    {
        $contentType = ContentType::JSON;
        $method = Method::GET;
        $uri = ResourceUri::list($resource);

        return new self($contentType, $method, $uri);
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function get(string $resource, string $id): self
    {
        $contentType = ContentType::JSON;
        $method = Method::GET;
        $uri = ResourceUri::get($resource, $id);

        return new self($contentType, $method, $uri);
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function create(string $resource, array $parameters, array $options = []): self
    {
        $contentType = ContentType::JSON;
        $method = Method::POST;
        $uri = ResourceUri::create($resource);
        $idempotencyKey = null;

        if (array_key_exists('idempotency_key', $options)) {
            $idempotencyKey = $options['idempotency_key'];
        }

        return new self($contentType, $method, $uri, $parameters, $idempotencyKey);
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function update(string $resource, string $id, array $parameters): self
    {
        $contentType = ContentType::JSON;
        $method = Method::PATCH;
        $uri = ResourceUri::update($resource, $id);

        return new self($contentType, $method, $uri, $parameters);
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function delete(string $resource, string $id): self
    {
        $contentType = ContentType::JSON;
        $method = Method::DELETE;
        $uri = ResourceUri::delete($resource, $id);

        return new self($contentType, $method, $uri);
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function verify(string $resource, string $id): self
    {
        $contentType = ContentType::JSON;
        $method = Method::POST;
        $uri = ResourceUri::withAction($resource, $id, 'verify');

        return new self($contentType, $method, $uri);
    }

    /**
     * Create a new Transporter Payload instance.
     */
    public static function cancel(string $resource, string $id): self
    {
        $contentType = ContentType::JSON;
        $method = Method::POST;
        $uri = ResourceUri::withAction($resource, $id, 'cancel');

        return new self($contentType, $method, $uri);
    }

    /**
     * Creates a new Psr 7 Request instance.
     */
    public function toRequest(BaseUri $baseUri, Headers $headers): RequestInterface
    {
        $body = null;

        $uri = $baseUri->toString() . $this->uri->toString();

        $headers = $headers->withUserAgent('resend-php', Resend::VERSION)
            ->withContentType($this->contentType);

        if ($this->idempotencyKey) {
            $headers = $headers->withIdempotencyKey($this->idempotencyKey);
        }

        if ($this->method === Method::POST || $this->method === Method::PATCH || $this->method === Method::PUT) {
            $body = json_encode(
                $this->parameters === [] || ! array_is_list($this->parameters) ? (object) $this->parameters : $this->parameters,
                JSON_THROW_ON_ERROR
            );
        }

        return new Request($this->method->value, $uri, $headers->toArray(), $body);
    }
}
