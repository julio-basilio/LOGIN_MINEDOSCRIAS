function Login(event) {
    // Impede o formulário de recarregar a página ao clicar no botão
    event.preventDefault();

    // Captura o valor correto do input (usando .value no singular)
    let nome = document.getElementById("Name").value;

    // Compara a variável correta (nome) com o valor desejado
    if (nome === "nome") {
        window.location.href = "https://google.com";
    } else {
        alert("Nome incorreto! Tente 'Julio' para testar o redirecionamento.");
    }
}