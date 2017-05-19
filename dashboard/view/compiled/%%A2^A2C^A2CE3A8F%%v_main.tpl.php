<?php /* Smarty version 2.6.17, created on 2017-05-19 03:13:10
         compiled from v_main.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Sistema de Votación</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-menu.css">

  </head>
    <?php echo $this->_tpl_vars['STY']; ?>

  <body>
    <?php echo $this->_tpl_vars['NAV']; ?>

    <div class="bdy">

    <div>

     <ul class="collection with-header">
        <li class="collection-header center"><h4>Votaciones en Curso</h4></li>
      </ul>
    <ul class="collapsible" data-collapsible="accordion">
    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['VOT']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <li>
        <div class="collapsible-header">Cantidad de Votos: <span class="new badge">0</span><i class="material-icons">filter_drama</i>input</div>
        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
    <?php endfor; endif; ?>
    </ul>

    </div>
    <?php echo $this->_tpl_vars['SCR']; ?>

  </body>
</html>