<?php /* Smarty version 2.6.17, created on 2016-12-12 21:50:03
         compiled from ajax/ajaxmantProductos.tpl */ ?>
<div id="mantProd">
<!-- <h2 align="center">Mantenimiento Productos</h2>
<hr> -->
<div class="row">
<div class="col s6">
<div class="input-field col s6">
<input id="searchprod" type="text" class="validate">
<label for="searchprod" id="phs">Buscar por Código</label>
</div>
<a class="dropdown-button btn-floating btn-large waves-effect waves-light green" data-activates="fgrande"><i class="material-icons">search</i></a>
<ul id="fgrande" class="dropdown-content" filter="1">
<li><a class="dropdown-item vfiltros" filtro="f1">Código</a></li>
<li><a class="dropdown-item vfiltros" filtro="f2">Nombre</a></li>
</ul>       
</div>
<div class="col s6">
    <a id="addproduct" class="btn-floating btn-large waves-effect waves-light right blue" href="#modal-productos"><i class="material-icons">add</i></a>
</div>
</div>

<div class="row">
<div class="col-md-12 col-lg-12">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dt-responsive nowrap" id="data-table-productos" cellspacing="0" width="100%" >
    <thead>
    <tr>
    <th style="width: 20%">Código</th>
    <th>Nombre1</th>
    <th>Precio Costo</th>
    <th>Precio Venta</th>
    <th>Margen Ganancia</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <tbody id="listaproductos">
    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['PROD']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][1]; ?>
</td>
    <td><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][2]; ?>
</td>
    <td><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][3]; ?>
</td>
    <td><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][4]; ?>
</td>
    <td><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][5]; ?>
</td>
    <td>
    <a class="btn-floating waves-effect waves-light amber darken-3 descuentos " id="desc<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-descuentos" title="Agregar Descuentos"><i class="material-icons">%</i></a>
    <a class="btn-floating waves-effect waves-light green salidainv" id="s<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-salida" title="Salida de Inventario"><i class=" fa fa-outdent"></i></a>
    <a class="btn-floating waves-effect waves-light blue editprod" id="m<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-productos" title="Editar Producto"><i class="fa fa-pencil-square-o"></i></a>
    <a class="btn-floating waves-effect waves-light red delprod" id="d<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" title="Eliminar Producto"><i class="fa fa-times"></i></a>
    </td>
    </tr>
    <?php endfor; endif; ?>
    </tbody>
    </table>
    </div>
    <br><br><br>
</div>
</div>

<div id="modal-productos" class="modal modal-fixed-footer" style="width:70%;height:90%">
    <div class="modal-content">
        <h4 class="accmodal">Agregar Producto</h4><hr>
            <nav class="blue">
                <div class="nav-wrapper">
                    <ul id="nav-mobile" class="left">
                        <li class="menuP active" id="tb1"><a>Datos Productos</a></li>
                        <li class="menuP" id="tb2"><a>Financiero</a></li>
                    </ul>
                </div>
            </nav>
            <div id="datosproductos" class="row"><br>
                <div class="col s6">
                    <div class="input-field">
                        <select id="vidfamilia">
                            <option value="0" disabled selected>Seleccione una Opción</option>
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['FAM']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $this->_tpl_vars['FAM'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['FAM'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <label>Seleccione una Familia</label>
                    </div>
                    <div class="input-field">
                        <select id="vidtipo">
                            <option value="0" disabled selected>Seleccione una Opción</option>
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['TIP']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $this->_tpl_vars['TIP'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['TIP'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <label>Seleccione un Tipo</label>
                    </div>
                    <div class="input-field">
                        <select id="vidmarca">
                            <option value="0" disabled selected>Seleccione una Opción</option>
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['MAR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $this->_tpl_vars['MAR'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['MAR'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <label>Seleccione una Marca</label>
                    </div>
                    <div class="input-field">
                        <select id="vidmodelo">
                            <option value="0" disabled selected>Seleccione una Opción</option>
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['MOD']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $this->_tpl_vars['MOD'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['MOD'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <label>Seleccione un Modelo</label>
                    </div>
                    <div class="input-field">
                        <select id="vidunidad">
                            <option value="0" disabled selected>Seleccione una Opción</option>
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['UNI']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $this->_tpl_vars['UNI'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['UNI'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <label>Seleccione una Unidad</label>
                    </div>
                </div>
                <div class="col s6">
                    <div class="input-field">
                        <input type="text" id="vnombre" class="formprod validate" value="">
                        <label class="active" for="vnombre">Nombre</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="vcodigo" class="formprod validate" value="">
                        <label class="active" for="vcodigo">Código</label>
                        <input type="hidden" id="vid" value="0">
                        <input type="hidden" id="vidusuario" value="">
                        <input type="hidden" id="vidsucursal" value="">
                        <input type="hidden" id="vimg" value="">
                    </div>
                    <div class="input-field">
                        <input type="number" id="vcantidad" class="formprod validate" value="" min="1">
                        <label class="active" for="vcantidad">Cantidad</label>
                    </div>
                    <div class="input-field">
                        <input type="number" id="vminimo" class="formprod validate" value="" min="1">
                        <label class="active" for="vminimo">Mínimo</label>
                    </div>
                    <div class="input-field">
                        <input type="number" id="vmaximo" class="formprod validate" value="" min="1">
                        <label class="active" for="vmaximo">Máximo</label>
                    </div>
                </div>
            </div>
            <div id="financiero" class="row hide"><br>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">¢</i>
                        <input type="text" id="vcosto" class="formprod validate calcvv" value="0.00" data-mask="9999999999.99">
                        <input type="hidden" id="hvcosto" value="">
                        <label class="active" for="vcosto">Precio Costo</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">%</i>
                        <input type="text" id="vganancia" class="formprod validate calcvv" value="0.00" data-mask="9999999999.99">
                        <label for="vganancia">Ganancia</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">¢</i>
                        <input type="text" id="vventa" class="validate calcvv" value="0.00" data-mask="9999999999.99">
                        <input type="hidden" id="hventa" value="">
                        <label for="vventa">Precio Venta</label>
                    </div>
                </div>
                <div class="col s6">
                    <div class="input-field col s10">
                        <select id="imp"></select>
                        <label>Seleccione un Impuesto</label>
                    </div>
                    <div class="col s2">
                        <button type="button" class="btn-floating btn-large waves-effect waves-light blue" id="addimp"><i class="material-icons">add</i></button>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <ul class="collection hide" id="impuestos">
                            <!-- <li class="collection-item" id="newimp1"><div><span id="vimv1" value="12">Venta - 12%</span><a class="secondary-content delimp" id="dimp1"><i class="material-icons">delete</i></a></div></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <a class="modal-action waves-effect waves-light btn-flat white-text blue" id="addprod">Agregar</a>
        <a class="modal-action waves-effect waves-light btn-flat white-text blue" id="editprod">Guardar</a>
        <a class="modal-action modal-close waves-effect waves-light btn-flat white-text grey lighten-1">Salir</a>
    </div>
</div>





<div class="modal fade" id="modal-salida" style="width:70%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Salida de Inventario</h4>
                <h5 class="form-horizontal"><b>Producto: <span id="nomprod"></span></b></h5>
            </div>
            <div class="modal-body">
                <p>Elija el inventario a enviar este producto y defina un motivo:</p>
                <div class="input-group">
                <div class="input-group-addon">Tipo</div>
                <select id="vtipoinv" class="form-control" type="select">
                <option value="0">Seleccione un inventario...</option>
                <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['TIPOINV']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <option value="<?php echo $this->_tpl_vars['TIPOINV'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['TIPOINV'][$this->_sections['LE']['index']][1]; ?>
</option>
                <?php endfor; endif; ?>
                </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="titcom">Motivo</span>
                    <textarea name="" id="vdetalle" class="form-control" rows="2" required="required" placeholder="Detalle..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-descuentos" class="modal modal-fixed-footer" style="width:70%">
    <div class="modal-content">
        <h4>Agregar Descuentos a <span id="dprod"></span></h4><hr>
        <div class="row">
            <div class="col s6">
                <div class="input-field col s10">
                    <select id="dscts"></select>
                    <label>Seleccione un Descuento</label>
                    <input type="hidden" id="idproducto" class="form-control" value="">
                </div>
                <div class="col s2">
                    <button type="button" class="btn-floating btn-large waves-effect waves-light blue" id="adddsct"><i class="material-icons">add</i></button>
                </div>
            </div>
            <div class="col s6" id="tbldesc">
                <h5>Descuentos</h5>
                <ul class="collection " id="listadescuentos">
                
                </ul>
            </div>
        </div>
            
    </div>
    <div class="modal-footer">
        <a class="modal-action waves-effect waves-light btn-flat white-text blue" id="gdesc">Guardar</a>
        <a class="modal-action modal-close waves-effect waves-light btn-flat white-text grey lighten-1">Salir</a>
    </div>
</div>

</div> <!-- End mantProductos -->

<script src="../assets/js/jquery.mask.min.js"></script>