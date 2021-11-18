function validaArquivo(){
    var ext = $('#arquivo').val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['pdf','doc','odt','txt']) == -1) {
        alert('OOOPS, extensão doarquivo inválida');
        return false;
    }

    return;
}