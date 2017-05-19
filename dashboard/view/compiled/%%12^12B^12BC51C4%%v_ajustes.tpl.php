<?php /* Smarty version 2.6.17, created on 2017-05-19 03:33:16
         compiled from v_ajustes.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Configuración</title>
    <?php echo $this->_tpl_vars['STY']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-ajustes.css">
    
  </head>
  <body>
    <?php echo $this->_tpl_vars['NAV']; ?>

    
    <div class="bdy">
    
    
    <div class="card z-depth-5">
    <ul class="collapsible" data-collapsible="accordion">

       <li>
          <div class="collapsible-header "><i class="small material-icons">work</i><h5>Votaciones</h5></div>
        
        <div class="collapsible-body"><div class="card-block">
        <br>
        <div class="row">
            <div class="col s12 m12 l5">

               <div class="input-field col s11 m9 l11">
                <a class="prefix" style="margin-left: 5% !important;"><i class="small material-icons">search</i></a>
                <input type="text" id="search_tipousuarios" maxlength="45" num="+27" var="nombre" style="margin-left: 15% !important;">
                <label for="search_tipousuarios" style="margin-left: 15% !important;">Buscar Tipo de Usuario</label>
            </div>

            <div id="ftipousuarios" class="col s11 m9 l11">
                <div class="row">

                    <div class="input-field col s12 ">
                       <a class="prefix btn-floating blue add tooltipped z-depth-5" modulo="tipousuario" data-position="top" data-tooltip="Ingresar Tipo de Usuario" style="padding-right: 5% !important;"><i class="small material-icons ">add</i></a>
                       <input type="hidden" id="vid_tusuario" value="0">
                       <input type="hidden" id="vdefecto_tusuario" value="0">
                       <input type="text" id="vnombre_tusuario" value="" style="margin-left: 15% !important;">
                       <label for="vnombre_tusuario" style="margin-left: 15% !important;">Ingresar Tipo Usuario</label>
                   </div>
               </div>
               <br>
           </div>
       </div>
       <br>
       <div class="col s12 m12 l5 ">
        <table class="table highlight responsive-table z-depth-3 centered" id="data-table-tipousuarios">
            <thead>
                <tr>
                    <th class="white-text blue" style="border: 0px; border-radius: 0px !important;">Tipo</th>
                    <th class="white-text blue" style="border: 0px; border-radius: 0px !important; width: 100% ">Acciones</th>
                </tr>
            </thead>
            <tbody class="centered" id="listatipousuarios">
                <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['TUSR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr id="b_<?php echo $this->_tpl_vars['TUSR'][$this->_sections['LE']['index']][0]; ?>
">
                    <td style="margin:0;">
                        <input type="text" value="<?php echo $this->_tpl_vars['TUSR'][$this->_sections['LE']['index']][1]; ?>
"  class="fast-edit center-align" style="border: 0px; margin: 0;">
                    </td>
                    <td style="margin:0;">
                    <?php if ($this->_tpl_vars['TUSR'][$this->_sections['LE']['index']][2] == 0): ?>
                    <a href='#modal-tusuarios' id="c<?php echo $this->_tpl_vars['TUSR'][$this->_sections['LE']['index']][0]; ?>
" modulo="moneda" title="Valores en el Sistema">
                    <i class="small material-icons ">info_outline</i></a>
                    <a href="#" modulo="tipousuario" id="d<?php echo $this->_tpl_vars['TUSR'][$this->_sections['LE']['index']][0]; ?>
" title="Eliminar Tipo Usuario"><i class="small material-icons ">delete</i></a>
                    </td>
                    <?php endif; ?>
                </tr>
                <?php endfor; endif; ?>
            </tbody>
        </table>
    </div>
    </div>

        </li>
    
    </ul>
    </div>
        
    </div>
    
    <?php echo $this->_tpl_vars['SCR']; ?>

    <script src="../assets/js/modulos/ajustes.js?v=1.1.9"></script>
    
  </body>

</html>