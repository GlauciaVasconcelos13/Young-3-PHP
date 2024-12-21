let botao = document.getElementsByClassName('salvar');
let voltar = document.getElementsByClassName('add')[0];

botao.addEventListener('click', clicar);
voltar.addEventListener('click', voltarFunc);

function clicar() {
    if (confirm('Você tem certeza? Se sim, clique em OK!')) {
        alert('Item salvo!');
    } else {
        alert('Item cancelado');
    }
}

function voltarFunc() {
    if (confirm('Tem certeza que quer voltar?')) {
        alert('Você voltou!');
    } else {
        alert('Você não voltou!');
    }
}