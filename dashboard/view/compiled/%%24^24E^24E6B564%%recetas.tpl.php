<?php /* Smarty version 2.6.17, created on 2017-03-30 04:47:59
         compiled from ajax/produccion/recetas.tpl */ ?>
<!-- hacer 2 div en donde cada uno tenga como encabezado creacion de recetas y edicion de recetas para futura version, esto para hacer que el sistema permita agregar varias recetas a las vez mientras que tambien pueda editar recetas mientras agrega recetas -->
<div class="row">
    <div class="col s12 m12 l8">
        <div class="row raddreceta">
            <div class="input-field col s12 m5 l5">
                <input id="vnombre" type="text" autocomplete="off">
                <label for="vnombre">Nombre del Proceso</label>
                <input type="hidden" id="count" value="0">
                <input type="hidden" id="spot" value="0">
            </div>
            <div class="input-field col s12 m5 l5">
                <input id="vcodigo" type="text" autocomplete="off">
                <label for="vcodigo">Codigo del Proceso</label>
            </div>
            <div class="col s2 m2 l2">
                <button type="button" class="btn-floating waves-effect waves-light blue hide" id="edtitcod" title="Editar nombre y codigo de la receta"><i class="material-icons" style="padding-top: 3px">save</i></button>
                <button type="button" class="btn-floating waves-effect waves-light blue z-depth-5" id="addrecipe"><i class="material-icons">add</i></button>
            </div>
        </div>
        <div class="row hide" id="daddprod">
            <div class="input-field col s4 m4">
                <input id="vproducto" type="text" class="autocomplete">
                <label for="vproducto">Insumo</label>
            </div>
            <div class="input-field col s3 m3">
                <input id="vcantidad" type="number" min="0">
                <label for="vcantidad">Cantidad</label>
            </div>
            <div class="input-field col s4 m4">
                <select id="vidunidad">
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['UNIP']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <option value="<?php echo $this->_tpl_vars['UNIP'][$this->_sections['LE']['index']][0]; ?>
" unidad="<?php echo $this->_tpl_vars['UNIP'][$this->_sections['LE']['index']][2]; ?>
"><?php echo $this->_tpl_vars['UNIP'][$this->_sections['LE']['index']][1]; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
                <label for="vidunidad">Seleccione una Unidad</label>
            </div>
            <div class="col s1 m1">
                <button type="button" class="btn-floating waves-effect waves-light blue" id="addproduct"><i class="material-icons">add</i></button>
            </div>
        </div>
        <div class="row" id="makerecipe">
            
        </div>
    </div>
    <div class="col s12 l4 ">
        <table class="table responsive-table striped bordered highlight z-depth-3" id="data-table-recetas" cellspacing="0" >
            <thead>
                <tr>
                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Nombre</th>
                    <th  class="white-text blue" style="border: 0; border-radius: 0px !important;">Total</th>
                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Acciones</th>
                </tr>
            </thead>
            <tbody id="listarecetas">
                <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['REC']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr>
                    <td style=" padding: 10px;"><?php echo $this->_tpl_vars['REC'][$this->_sections['LE']['index']][1]; ?>
</td>
                    <td style=" padding: 10px;"><?php echo $this->_tpl_vars['REC'][$this->_sections['LE']['index']][2]; ?>
</td>
                    <td style=" padding: 10px;">
                        <a class="btn-color pbtn instoproduct material-icons modal-trigger" href="#modal-addtoproducts" id="i<?php echo $this->_tpl_vars['REC'][$this->_sections['LE']['index']][0]; ?>
" title="Ingresar Receta a Inventario Producto Final">system_update_alt</a>
                        <a class="btn-color pbtn editreceta material-icons" id="m<?php echo $this->_tpl_vars['REC'][$this->_sections['LE']['index']][0]; ?>
">edit</a>
                        <a class="btn-color pbtn cdel delreceta material-icons" id="d<?php echo $this->_tpl_vars['REC'][$this->_sections['LE']['index']][0]; ?>
">close</a>
                    </td>
                </tr>
                <?php endfor; endif; ?>
            </tbody>
        </table>
    </div>
</div>