<?php /* Smarty version 2.6.17, created on 2017-04-06 07:09:20
         compiled from ajax/ajustes/ajaxBodegas.tpl */ ?>
<div class="card card-block z-depth-5">
    <span class="accmodulo">Agregar Bodegas</span><hr>
    <div class="row">
        <div id="fbodegas">
            <div class="input-field col s11 l5">
            <br>
                <input id="vbodega" type="text" class="validate">
                <label for="vbodega">Agregar Bodega</label>
                <input type="hidden" id="vidbodega" value="0">
            </div>
            <div class="col s1 m1 l1 mrgn">
            <br>
                <button type="button" class="btn-floating waves-effect waves-light blue add material-icons z-depth-5" modulo="bodega" id="addbod">add</button>
            </div>
        </div>
        <div class="col s12 l6">
        <br>
            <table class="table highlight centered responsive-table striped z-depth-3" id="data-table-bodegas" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="white-text blue" style="border: 0px;  border-radius: 0px !important">Nombre</th>
                        <th class="white-text blue" style="border: 0px;  border-radius: 0px !important">Acciones</th>
                    </tr>
                </thead>
                <tbody id="listabodegas">
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
                    <tr>
                        <td><?php echo $this->_tpl_vars['BOD'][$this->_sections['LE']['index']][1]; ?>
</td>
                        <td>
                            <i class="pbtn btn-color material-icons load" id="m<?php echo $this->_tpl_vars['BOD'][$this->_sections['LE']['index']][0]; ?>
" modulo="bodega">edit</i>
                            <i class="pbtn btn-color cdel material-icons delete" id="d<?php echo $this->_tpl_vars['BOD'][$this->_sections['LE']['index']][0]; ?>
" modulo="bodega" tip="vidbodega">close</i>
                        </td>
                    </tr>
                    <?php endfor; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card card-block z-depth-5">
    <span class="accmodulo">Agregar Inventarios</span><hr>
    <div class="row">
        <div class="col s12 l6" id="finventarios">
        <div class="row">
            <div class="input-field col s6">
                <select id="vidbode" type="select">
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
                <label for="vidbode">Bodega</label>
            </div>
            <div class="input-field col s6">
                <input id="vinventario" type="text" class="validate">
                <label for="vinventario">Nombre Inventario</label>
                <input type="hidden" id="vidinventario" value="0">
            </div>
        </div>
        <div class="row">
            <div class="input-field marginzero col s6">
                <select id="vidtipo" type="select">
                    <option value="1">Mercadería</option>
                    <option value="2">Producción</option>
                    <option value="3">Consignación</option>
                    <option value="4">Gastos</option>
                    <option value="5">Activos</option>
                </select>
                <label for="vidtipo">Tipo Inventario</label>
            </div>
            <div class="input-field col s5 marginzero">
                <select id="vidcuenta" type="select">
                    <option value="0">Cuenta Por Defecto</option>
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['CDEF']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <option value="<?php echo $this->_tpl_vars['CDEF'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['CDEF'][$this->_sections['LE']['index']][1]; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
                <label for="vidcuenta">Cuenta</label>
            </div>
            <div class="col s1">
                <button type="button" class="btn-floating waves-effect waves-light blue add material-icons z-depth-5" modulo="inventario" id="addinv">add</button>
            </div>
        </div>

        </div>

        <div class="col s12 l6">
            <table class="table highlight centered responsive-table z-depth-3" id="data-table-inventarios" cellspacing="0" width="100%" >
                <thead>
                    <tr>
                        <th class="white-text blue" style="border: 0px;  border-radius: 0px !important">Nombre</th>
                        <th class="white-text blue" style="border: 0px;  border-radius: 0px !important">Acciones</th>
                    </tr>
                </thead>
                <tbody id="listainventarios"></tbody>
            </table>
        </div>
    </div>
</div>