var selectorAll = (id) => document.querySelectorAll(id)
var selector = (id) => document.querySelector(id)
var blocks = {
    'A1': 2,
    'A3': 9,
    'A5': 4,
    'A7': 8,
    'B4': 8,
    'B5': 7,
    'B8': 1,
    'B9': 9,
    'C1': 6,
    'C5': 1,
    'C6': 2,
    'C8': 4,
    'D2': 3,
    'D5': 6,
    'D6': 5,
    'D7': 1,
    'E1': 7,
    'E6': 8,
    'E8': 3,
    'F1': 8,
    'F3': 1,
    'F5': 3,
    'F9': 7,
    'G4': 6,
    'G6': 4,
    'G8': 8,
    'H1': 6,
    'H2': 5,
    'H7': 3,
    'H9': 1,
    'I1': 7,
    'I3': 9,
    'I5': 2,
    'I7': 4,
    'I8': 5
};

selectorAll('input').forEach(e => {
    e.setAttribute('max', '1')
    if (blocks[e.id]) {
        e.value = blocks[e.id]
        e.setAttribute('readonly', '')
        e.style.backgroundColor = '#CCC'
    }
    if (!blocks.hasOwnProperty(e.id)) {
        e.addEventListener('input', (data) => {
            if (data.target.value) {
                e.style.backgroundColor = '#CCC'
            } else {
                e.style.backgroundColor = '#FFF'
            }
        })
    }

})
selector('#submitar').addEventListener('click', async function (e) {
    e.preventDefault();
    var form = selector('#form')
    var formData = new FormData(form)
    var request = new XMLHttpRequest()
    request.open('POST', 'resolucao.php')
    request.onload = function () {
        var resultado = JSON.parse(this.responseText)
        var msg = selector('#mensagem')
        if (resultado === 1) {
            msg.innerHTML = 'Parabéns! você completou o sudoku corretamente'
        } else {
            msg.innerHTML = 'Há algum erro em quadrantes, linhas ou colunas'
        }
        console.log()
    }
    request.send(formData)


})