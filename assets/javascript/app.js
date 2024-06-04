// app.js
document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.button');
    const registerText = document.querySelector('.registerText a');

    button.addEventListener('click', () => {
        alert('Conectar clicado');
    });

    registerText.addEventListener('click', (event) => {
        event.preventDefault();
        alert('Redirecionando para cadastro');
    });
});