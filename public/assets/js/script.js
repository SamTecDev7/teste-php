document.querySelector('#colchetes').addEventListener('input', function () {
    restringerSomenteAColchetes(this);
});

document.querySelector('#btnSubmit').addEventListener('click', function () {
    const url = '/TesteValidacao/validarColchetes/';
    const parametros = document.querySelector('#colchetes').value;
    executarRequisicaoGetFetch(url, parametros);
});

const restringerSomenteAColchetes = (element) => {
    const inputField = document.querySelector('#myInput');
    let validChars = ['(', ')', '{', '}', '[', ']'];
    let newValue = '';
    for (var i = 0; i < element.value.length; i++) {
        if (validChars.includes(element.value[i])) {
            newValue += element.value[i];
        }
    }
    element.value = newValue;
}

const executarRequisicaoGetFetch = (url, parametros) => {
    const urlPreparada = url + encodeURI(parametros);
    fetch(urlPreparada)
        .then(response => response.json())
        .then(data => {
            if (data.status == true) {
                Swal.fire({
                    title: "Bom Trabalho!",
                    text: data.menssagem,
                    icon: "success"
                });
            } else {
                Swal.fire({
                    title: "Ops!",
                    text: data.menssagem,
                    icon: "error"
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: "Desculpa, mas tivemos um erro interno!",
                text: error,
                icon: "error"
            });
        });
}