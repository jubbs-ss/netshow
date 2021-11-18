function validaArquivo(){
    if($('#arquivo').val() == '')
    {
        alert('OOOPS, é necessário que você suba um arquivo.');
        return false;
    }
    var ext = $('#arquivo').val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['pdf','doc','odt','txt']) == -1) {
        alert('OOOPS, extensão doarquivo inválida');
        return false;
    }

    return;
}

function validateEmail(elemento) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(String($(elemento.val())).toLowerCase()))
    {
        alert('1');
    }
    else{
        alert('2');
    }
}
