<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>README - Xuda Doces</title>
    <style>
        /* Estilos básicos para simular a renderização de um README */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: #f4f4f4;
        }
        h1, h2, h3 {
            color: #2c3e50;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-top: 30px;
        }
        h1 { font-size: 2.5em; }
        h2 { font-size: 1.8em; }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        pre {
            background-color: #eee;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: "Courier New", Courier, monospace;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Xuda Doces</h1>
    <p>Bem-vindo ao repositório do site da Xuda Doces! Este projeto apresenta um site responsivo e informativo para uma doceria artesanal, fundada em 2020, que oferece bolos caseiros, bolos de pote e brigadeiros de alta qualidade e bom preço.</p>

    ---

    <h2>Sobre o Projeto</h2>
    <p>O site da Xuda Doces tem como objetivo principal:</p>
    <ul>
        <li>Apresentar a história da doceria e seus valores.</li>
        <li>Exibir o catálogo de produtos (bolos, bolos de pote e brigadeiros) com detalhes sobre sabores e alérgenos.</li>
        <li>Fornecer um formulário de contato para que os clientes possam entrar em contato facilmente.</li>
        <li>Oferecer uma experiência de navegação agradável e responsiva em diferentes dispositivos.</li>
    </ul>

    ---

    <h2>Tecnologias Utilizadas</h2>
    <p>Este projeto foi desenvolvido utilizando as seguintes tecnologias:</p>
    <ul>
        <li><strong>HTML5:</strong> Estrutura e conteúdo da página.</li>
        <li><strong>CSS3:</strong> Estilização e design responsivo.</li>
        <li><strong>JavaScript:</strong>
            <ul>
                <li>Manipulação do DOM para funcionalidades interativas, como pop-ups de detalhes dos produtos.</li>
                <li>Validação de formulário no lado do cliente.</li>
            </ul>
        </li>
        <li><strong>PHP:</strong>
            <ul>
                <li>Processamento do formulário de contato.</li>
                <li>Envio de e-mails via Resend API.</li>
            </ul>
        </li>
    </ul>

    ---

    <h2>Acesso ao Site</h2>
    <p>O site da Xuda Doces está hospedado gratuitamente no InfinityFree e pode ser acessado através do seguinte link:</p>
    <p><a href="https://xudadoces.free.nf">https://xudadoces.free.nf</a></p>

    ---

    <h2>Como Usar</h2>
    <ul>
        <li>Navegue pelas seções "Nossa História", "Produtos" e "Fale Conosco".</li>
        <li>Clique nos botões "VER MAIS" na seção de produtos para ver os detalhes dos doces.</li>
        <li>Preencha o formulário de contato para enviar uma mensagem.</li>
    </ul>

    ---

    <h2>Estrutura do Projeto</h2>
    <pre><code>.
├── imagens/                # Imagens do site (logo, produtos, ícones sociais)
├── estilos/                # Arquivos CSS
│   └── css.css
├── vendor/                 # Dependências do Composer (gerado automaticamente para PHP)
├── composer.json           # Arquivo de configuração do Composer
├── composer.lock           # Arquivo de bloqueio do Composer
├── enviar_email.php        # Script PHP para processamento do formulário de contato
├── script.js               # Lógica principal do JavaScript e validação de formulário
├── popup.js                # Lógica para os pop-ups de produtos
└── index.html              # Página principal do site
</code></pre>

    ---

    <h2>Desenvolvedores</h2>
    <p>Este projeto foi desenvolvido por:</p>
    <ul>
        <li>Victor Magno de Freitas</li>
        <li>Jonatas Bandeira Alves</li>
        <li>Thalita Victoria Lopes Meira</li>
        <li>Mariana Nogueira Neves</li>
    </ul>

    
</body>
</html>