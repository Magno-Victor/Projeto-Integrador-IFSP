document.querySelector("form").addEventListener("submit", function(validar){

let nome = document.getElementById("nome").value 
let email = document.getElementById("email").value 
let telefone = document.getElementById("telefone").value 
let mensagem = document.getElementById("mensagem").value 

let vazio = "";

if(nome === ""){
    vazio = "Favor prencher o campo nome!\n";
}

if(email === ""){
    vazio += "Favor prencher o campo email!\n";
}

if(telefone === ""){
    vazio += "Favor prencher o campo telefone!\n";
}

if(mensagem === ""){
    vazio += "Favor prencher o campo mensagem!\n";
}

if(vazio != ""){
    alert(vazio);
    validar.preventDefault();

}

});



// pega a url da pagina
let statusPhp = window.location.href;

// verifica se tem o trecho na url e exibi um alert correspondente
if (statusPhp.includes("?status=sucesso")) {
    alert("Mensagem enviada com sucesso!");
}
else if (statusPhp.includes("?status=erro_campos")) {
    alert("Por favor, preencha todos os campos do formulário.");
}