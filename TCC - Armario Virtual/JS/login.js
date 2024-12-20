let botao = document.getElementsByClassName('entrar');
let voltar = document.getElementsByClassName('cadastro')[0];

botao.addEventListener('click', clicar);
voltar.addEventListener('click', voltar);

function clicar() {
    if (confirm('Você tem certeza que os dados estão corretos? Se sim, clique em OK!')) {
        alert('Entre e aproveite!');
    } else {
        alert('Cancelado!');
    }
}

function voltar() {
    if (confirm('Se não tem cadastro, ENTRE!')) {
        alert('Cadastro iniciado!');
    } else {
        alert('Cadastro cancelado!');
    }
}