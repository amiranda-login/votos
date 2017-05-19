<?php 
  require_once '_config/mysqlDB.php'; 
  $db = new DBClass();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Mi Voto</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/DataTables/media/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/iconos/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/modulos/style-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/system.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/modulos/style-mivoto.css">
    
  </head>
  <body>
    
     <div id="shows" class="card" style="width: 340px; margin: 0 auto; min-width: 350px; margin-top: 2%; background-color: rgba(11,56,97,0.7); display: none;z-index: 1000; "> 
     <br>  
     <div class="card-header"><p class="flow-text center white-text"><b>Vamos a Votar!!!</b></p></div>

        <div class="row">
        <div class="input-field col s12">
        
            <input id="user" type="text" class="validate" style="height: 40px; font-size: 20px; padding-left: 2%; margin-top: 2%">
            <label for="user" class="white-text"><b>Ingrese su Cédula</b></label>
        </div>
        <div class="input-field col s12 hide">
            <input id="pass" type="password" name="pss" class="validate" style="height: 40px; font-size: 20px; padding-left: 2%; margin-top: 2%">
            <label for="pass" class="white-text"><b>Seccións</b></label>
        </div>
        <div class="row">
            <div class="col s12"><br>
                <a class="btn waves-effect waves-light blue" id="getIn" style="width: 100%;" href="#">Ingresar</a>
            </div>

        </div>
        </div>
    </div>

    <div id="bdy" class="hide">
      <h4 class="center">Vota por tu Favorito</h4>
      <div class="mycontainer">
        <div class="row">

        <?php 
          $candidatos = $db->ejecutar("select b.id,b.nombre,b.img,b.partido,b.bandera from detallevotaciones a join candidatos b on a.idcandidato = b.id")->fetch_all();

          foreach ($candidatos as $obj) { ?>
          

          <div class="col s12 m4">

          <div class="card">
            <div class="card-image">
              <img src="<?php echo $obj[2]; ?>">
              <span class="card-title"><?php echo $obj[1]; ?></span>
              <a class="btn-floating halfway-fab waves-effect waves-light red right" id="v<?php echo $obj[0]; ?>"><i class="fa fa-thumbs-up"></i></a>
            </div>
            <div class="card-content">
              <p><?php echo $obj[3]; ?></p>
              <p><?php echo $obj[4]; ?></p>
            </div>
          </div>

          </div>

          <?php } ?>


        </div>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/mask/jquery.mask.js"></script>
    <script src="assets/js/materialize.js?v=1.8"></script>
    <script src="assets/js/modulos/menu.js?v=1.4"></script>
    <script src="assets/libs/charts/chart.js"></script>
    <script src="assets/libs/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/DataTables/media/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/asgard.js?v=1.16"></script>
    <script src="assets/js/modulos/mivoto.js?v=0.1"></script>
    
  </body>

</html>