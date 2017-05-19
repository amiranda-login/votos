<?php /* Smarty version 2.6.17, created on 2017-05-19 01:07:17
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'login.tpl', 48, false),)), $this); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Votos</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link href="../assets/css/materialize.css" rel="stylesheet">
    <link href="../assets/libs/iconos/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-login.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/system.min.css">

  </head>
  <body>
  
<div class="bdy ">
<div class="row"><br><br>

    <div class="card" style="width: 340px; margin: 0 auto; min-width: 350px; margin-top: 2%; background-color: rgba(11,56,97,0.7) "><br>
    <div class="card-header"><p class="flow-text center white-text"><b>Sistema de Votación</b></p></div>
    <div class="card-content">
    
    <form role="form" id="logF" action="index.php" method="POST">
    <input type="hidden" name="vdir" value="" id="vdir">
        <div class="input-field col s12">
        
            <input id="user" type="text" name="usr" class="validate" style="height: 40px; font-size: 20px; padding-left: 2%; margin-top: 2%">
            <label for="user" class="white-text"><b>Ingrese su Cédula</b></label>
        </div>
        <div class="input-field col s12">
            <input id="pass" type="password" name="pss" class="validate" style="height: 40px; font-size: 20px; padding-left: 2%; margin-top: 2%">
            <label for="pass" class="white-text"><b>Contraseña</b></label>
        </div>
        <div class="row">
            <div class="col s12"><br>
                <button type="submit" class="btn waves-effect waves-light blue" style="width: 100%;">Ingresar</button>
            </div>

            <div class="col s12 center hide"><br>
                <small class="white-text"><a href="#modal1" id="recupss" >Olvidó su Contraseña?</a></small>
            </div>

            <div class="col s12">
                <br><br>
                <center>
                    <small class="white-text">© <?php echo ((is_array($_tmp='Y')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp)); ?>
. Copyright. Todos los derechos reservados. logintechCR, S. A. </small>
                </center>
            </div>
        </div>
        </div>
    </form>
    </div>
    
    </div>
</div>
<div id="modal1" class="modal bottom-sheet">
    <div id="msjrecupss" class="modal-content center">
    
    </div>
  </div>

</div>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/materialize.js"></script>
    <script src="../assets/js/asgard.js"></script>
    <script src="../assets/js/modulos/login.js?v=1.3"></script>
  </body>
</html>