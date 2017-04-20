<?php /* Smarty version 2.6.17, created on 2017-04-04 06:28:33
         compiled from ajax/ajustes/ajaxCuentasDefecto.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'ajax/ajustes/ajaxCuentasDefecto.tpl', 62, false),)), $this); ?>
<div class="card">
    
    <div class="card-block">
        <h3>Ingresar Cuenta</h3>
        <div class="row">

            <div class="input-field col s12 m6">
                <div class="prefix addglobal pbtn" title="Agregar Cuenta"><i class="material-icons">add</i></div>
                <select class="slide" cod="1" id="vgenero" lvl="0">
                    <option value="0">Seleccione una Opción</option>
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['CUE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <option value="<?php echo $this->_tpl_vars['CUE'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['CUE'][$this->_sections['LE']['index']][1]; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
                <label for="vgenero">Cuenta</label>
            </div>
           
            <div class="col s12 m6 addcta" cod="2">
                <div class="row">
                    <div class="col s9 input-field">
                    <i class="fa fa-arrow-left moveL prefix pbtn" style="display: none"></i>
                    <input type="text" class="slide" id="vnombre" maxlength="40">
                    <label for="vnombre">Nombre de la Cuenta</label>
                    </div>

                    <div class="col s3">
                    <p>
                        <input type="checkbox" id="continuo" checked title="Cuenta Padre">
                        <label for="continuo">Cuenta Padre</label> 
                    </p>
                    
                    <input type="hidden" id="vispadre" value="1">
                    </div>
                </div>
            </div>
        </div>
        <span id="myub">Ubicación Actual: Raíz</span>
        <br>

         <h3>Modificar Cuentas</h3>
        <div class="z-depth-5" id="vcuentas">
            <div class="collection">

            <a class="collection-item blue" style="color: black;">
              <b><div class="row">
                <div class="col s4 left blue   white-text">
                    Nombre de la Cuenta
                </div>
                <div class="col s4 center blue white-text"> 
                    Número de la Cuenta
                </div>
                <div class="col s4 right blue  white-text">
                    Acciones
                </div>
              </div></b>
            </a>
            
            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['VCUE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <a href="#!" class="collection-item cuecon" style="max-height:220px;padding:0;padding-top: 2px; <?php if ($this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][4] != 1): ?>display: none;<?php endif; ?>" deep="<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][3]; ?>
" ndeep="<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][4]; ?>
">
              <div class="row">
                <div class="col s4 left">
                    <input type="text" tp="<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][0]; ?>
" class="editc" value="<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][1]; ?>
" title="Editar Nombre" style="border: 0px; border-left:1px solid #e2e2e2;margin-bottom: 0px;<?php if ($this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][4] != 1): ?> margin-left: <?php echo smarty_function_math(array('equation' => 'x * y','x' => 2,'y' => $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][4]), $this);?>
%;<?php endif; ?>" <?php if ($this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][4] == 1): ?> readonly <?php endif; ?> maxlength="40">
                </div>
                <div class="col s4 numcon center" style="cursor: pointer; min-height: 40px; margin: 0 auto;">
                    <?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][2]; ?>

                </div>
                <div class="col s4 right">
                    <?php if ($this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][4] != 1): ?>

                    <input type="checkbox" class="ispadr" id="ip<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][0]; ?>
" title="Cuenta Padre" <?php if ($this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][5] == 1): ?> checked <?php endif; ?>>
                    <label for="ip<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][0]; ?>
"></label>

                    <i class="material-icons" id="ec<?php echo $this->_tpl_vars['VCUE'][$this->_sections['LE']['index']][0]; ?>
" title="Eliminar Cuenta">delete</i>
                    <?php endif; ?>
                </div>
              </div>
            </a>
            <?php endfor; endif; ?>
            </div>
        </div>

        <br>
         <h3>Cuentas por Defecto Sistema</h3>

         <div class="row">

            <div class="col s12">
            <table class="centered highlight bordered responsive-table z-depth-5 " id="data-table-defecto">
            <thead>
                <th class="white-text blue" style="border: 0px;  border-radius: 0px !important">Nombre</th>
                <th class="white-text blue" style="border: 0px;  border-radius: 0px !important; width: 100%;">Cuenta</th>
                <th class="white-text blue" style="border: 0px;  border-radius: 0px !important; width: 100%;">Cambiar</th>
            </thead>
            <tbody>
             <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['DCUE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr id="def<?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][0]; ?>
">
                    <td style="width:20%"><?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][3]; ?>
 <?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][5]; ?>
</td>
                    <td style="width:50%" id="cta<?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][0]; ?>
" pr="<?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][1]; ?>
"><?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][2]; ?>
</td>
                    <td style="width:50%">
                      <input name="cta-def" type="radio" id="r<?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][0]; ?>
"/>
                      <label for="r<?php echo $this->_tpl_vars['DCUE'][$this->_sections['LE']['index']][0]; ?>
"></label>
                    </td>
                </tr>
            <?php endfor; endif; ?>
            </tbody>
            </table>
            </div>
         </div>

         <div id="modal-defcta" class="modal bottom-sheet" style="min-height:220px;" >
            <div class="modal-content">
              <h4>Cambio de Cuenta por Defecto</h4>
              <div class="input-field">
                  <select id="vdefecto">
                    <option value="0" disabled>Seleccione una Opción</option>
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['RCUE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <option value="<?php echo $this->_tpl_vars['RCUE'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['RCUE'][$this->_sections['LE']['index']][1]; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
                <label for="vdefecto" id="ldef-cta"></label>
            </div>
            </div>
            <div class="modal-footer">
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
            </div>
          </div>
         
    </div>
</div>