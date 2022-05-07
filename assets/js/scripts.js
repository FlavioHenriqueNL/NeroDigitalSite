
function backToTop(){
    $('html, body').animate({scrollTop:0}, 800);
}
function adicionarCollapse(id){
    $('#'+id).each(function(){
        console.log("#"+id)
        var tamanho = $("body").width();
        var hasClass = $("#"+id).hasClass('collapse');
        if (tamanho <= 752) {
            $('#'+id).addClass('collapse');
        }else{
            if (hasClass) {
                $('#'+id).removeClass('show');
                $('#'+id).removeClass('collapse');
            }
        }
    });
}