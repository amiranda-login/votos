<?php /* Smarty version 2.6.17, created on 2016-12-05 20:13:01
         compiled from v_compras.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Facturación</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-compras.css">

</head>
<body>
<br>
<?php echo $this->_tpl_vars['NAV']; ?>

<div class="bdy">
    <div id="fcompras">
    <h3 class="card-header card-primary" style="color: #fff">
    <div class="row">
      <div class="col-md-10 col-lg-10">
        <b id="tptit">VENTAS</b>
      </div>
      <div class="col-md-2 col-lg-2">
        <span style="font-size: 0.5em">Ir a:</span>&nbsp;<input type="checkbox" checked data-toggle="toggle" data-off="<span id='comp'>Compras</span>" data-on="<span id='fact'>Ventas</span>" data-size="small" data-width="100" data-onstyle="primary active" data-offstyle="primary active">
        <!-- data-onstyle="primary" data-offstyle="primary" -->
      </div>
    </div>
    </h3>

    <div class="card-block card-footer">
      <br>
      <!-- <label class="der asterisco ncompra"><b>N° Compra: <?php echo $this->_tpl_vars['NFACT']; ?>
</b></label> -->
      <input type="hidden" id="vid" value="0">
      <input type="hidden" id="vidempresa" value="<?php echo $_SESSION['IMPRESA']; ?>
">

      <br>
      <div id="mfacturacion">
      
      </div> <!-- mfacturacion -->
    </div> <!-- card footer -->
    </div> <!-- fcompras -->
</div> <!-- bdy -->
<script src="../assets/js/modulos/compras.js"></script>
</body>
</html>