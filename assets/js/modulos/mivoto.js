$(function(){
    $("#shows").slideDown();
    setTimeout(function(){$("#user").focus();},1000);

    $("#getIn").click(function(){
        $("#shows").hide();
        $("#bdy").removeClass('hide');
    })

    $("[id^=v]").click(function(){
        $("[id^=v]").prop('disabled',true);
        var vid = $(this).attr('id').substr(1);
        var vced = $("#user").val().replace(/-/g,'');

        $.ajax({
                url: 'index.php',
                type: 'POST',
                data: {id: vid,ced : vced}
                })
                .done(function(data) {
                });
        Materialize.toast('Gracias por tu Voto, Recuerda es Secreto...',4000,'green');
        setTimeout(function(){location.reload()},4000);
    })
})