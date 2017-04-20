<?php /* Smarty version 2.6.17, created on 2017-04-20 01:41:22
         compiled from v_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'v_main.tpl', 8, false),)), $this); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Votación <?php echo ((is_array($_tmp='Y')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp)); ?>
</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-menu.css">

  </head>
  <body>
    <?php echo $this->_tpl_vars['NAV']; ?>

    <div class="bdy">
    </div>
  </body>
</html>