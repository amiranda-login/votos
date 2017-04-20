<?php /* Smarty version 2.6.17, created on 2017-03-29 23:25:35
         compiled from v_inventarios.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-inventarios.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php echo $this->_tpl_vars['NAV']; ?>

    <div class="bdy">
        <div class=" card center blue-grey white-text mbotcero" >
          <h4 class="center-align white-text mbotcero z-depth-5" style="background-color:#0B3861">Inventario</h4>
        </div>
        
        <div class="card card-content mdinvent z-depth-5">
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <select type="select" class="_det" id="vidbodega" det="bodega" sig="vidinventario" prev="" d-b="41">
                <option value="0">Seleccione una Bodega</option>
                <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['BOD']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['LE']['show'] = true;
$this->_sections['LE']['max'] = $this->_sections['LE']['loop'];
$this->_sections['LE']['step'] = 1;
$this->_sections['LE']['start'] = $this->_sections['LE']['step'] > 0 ? 0 : $this->_sections['LE']['loop']-1;
if ($this->_sections['LE']['show']) {
    $this->_sections['LE']['total'] = $this->_sections['LE']['loop'];
    if ($this->_sections['LE']['total'] == 0)
        $this->_sections['LE']['show'] = false;
} else
    $this->_sections['LE']['total'] = 0;
if ($this->_sections['LE']['show']):

            for ($this->_sections['LE']['index'] = $this->_sections['LE']['start'], $this->_sections['LE']['iteration'] = 1;
                 $this->_sections['LE']['iteration'] <= $this->_sections['LE']['total'];
                 $this->_sections['LE']['index'] += $this->_sections['LE']['step'], $this->_sections['LE']['iteration']++):
$this->_sections['LE']['rownum'] = $this->_sections['LE']['iteration'];
$this->_sections['LE']['index_prev'] = $this->_sections['LE']['index'] - $this->_sections['LE']['step'];
$this->_sections['LE']['index_next'] = $this->_sections['LE']['index'] + $this->_sections['LE']['step'];
$this->_sections['LE']['first']      = ($this->_sections['LE']['iteration'] == 1);
$this->_sections['LE']['last']       = ($this->_sections['LE']['iteration'] == $this->_sections['LE']['total']);
?>
                <option value="<?php echo $this->_tpl_vars['BOD'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['BOD'][$this->_sections['LE']['index']][1]; ?>
</option>
                <?php endfor; endif; ?>
              </select>
              <label for="vidbodega">Bodega</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <select type="select" det="inventario" id="vidinventario" d-b="111">
                <option value="0">Seleccione un Inventario</option>
              </select>
              <label for="vidinventario">Inventario</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12">
              <div id="listainventarios"></div>
            </div>
          </div>
        </div>
    </div>
    <script src="../assets/js/modulos/inventarios.js"></script>
  </body>
</html>