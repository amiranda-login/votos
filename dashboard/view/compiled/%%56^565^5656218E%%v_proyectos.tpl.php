<?php /* Smarty version 2.6.17, created on 2017-02-02 18:26:49
         compiled from v_proyectos.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Proyectos</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-proyectos.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <br>
    <?php echo $this->_tpl_vars['NAV']; ?>

    <div class="bdy">
      <input type="text" id="descp" class="fd autocomplete center prod" value="" placeholder="Descripción">
    </div>
    <script src="../assets/js/modulos/proyectos.js"></script>
    <?php echo '
    <script type="text/javascript">
      $(function(){
  // $("#fproyectoss").submit(function(){return false});
  // $("#data-table-proyectoss").dataTable();

  $("#descp").keydown(function(e){
        var charCode = e.which || e.keyCode;
        var charStr = String.fromCharCode(charCode);
        
        if (/[a-zA-Z0-9-_. ]/i.test(charStr) || charCode == 8) {
            $(".autocomplete-content").remove();
        
            $("#descp").autocomplete({
                limit: 20,
                data: arr(\'login\',4,\'trim(concat(nombre," ",apellido1," ",apellido2)) as nom,null\',2,\'!bisproveedor having nom like "%\'+$("#descp").val()+\'%" limit 20\',0,0,0,1)
            });

            $("#descp").siblings($(".autocomplete-content")).css(\'width\',\'25%\');
        }
    });

    console.log(arr(\'login\',4,\'trim(concat(nombre," ",apellido1," ",apellido2)) as nom,null\',2,\'!bisproveedor having nom like "%\'+$("#descp").val()+\'%" limit 20\',0,0,0,1))

});
    </script>
    '; ?>

  </body>
</html>