<?php /* Smarty version 2.6.17, created on 2017-04-03 19:26:43
         compiled from ajax/productos/ajaxmantProductos.tpl */ ?>
<div id="mantProd">
    <div class="row">
        <div class="input-field col s11 m8 l5">
            <a class="prefix dropdown-button tooltipped" data-activates='fgrande' data-position="button" data-tooltip="Cambiar Filtro"><i class="small material-icons pbtn">search</i></a>
            <ul id='fgrande' class='dropdown-content'>
                <li><a href="#!" vfiltros="1">Nombre</a></li>
                <li><a href="#!" vfiltros="2">Código</a></li>
            </ul>
            <input type="text" id="search_productos" maxlength="100" num="v14" var="nombre">
            <label for="search_productos" class="truncate">Buscar Producto por Nombre o Código</label>
        </div>
        <div class="col s12 m4 l7">
            <a id="addproduct" class="btn-floating waves-effect waves-light right blue z-depth-5" href="#modal-productos"><i class="material-icons">add</i></a>
        </div>
    </div>
<div class="row">
    <div class="col s12 m12 l12">
        <table class="table responsive-table centered striped bordered highlight z-depth-5" id="data-table-productos" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important;">Código</th>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 100%">Nombre</th>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 100%">Marca</th>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 100%">Precio Costo</th>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 100%">Precio Venta</th>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 100%">Ganancia</th>
                    <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 100%" >Acciones</th>
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
                    <td style="width: 10%"><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][1]; ?>
</td>
                    <td style="width: 10%"><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][2]; ?>
</td>
                    <td style="width: 10%"><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][3]; ?>
</td>
                    <td style="width: 10%"><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][4]; ?>
</td>
                    <td style="width: 10%"><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][5]; ?>
</td>
                    <td style="width: 10%"><?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][6]; ?>
</td>
                    <td style="width: 10%">
                        <a class="btn-color pbtn descuentos" id="desc<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-descuentos" title="Agregar Descuentos"><img src="../assets/img/icon/percent.svg"></a>
                        <a class="btn-color pbtn salidainv" id="s<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-movinventario" title="Movimiento de Inventario"><i class="material-icons">compare_arrows</i></a>
                        <a class="btn-color pbtn editprod" id="m<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-productos" title="Editar Producto"><i class="material-icons">edit</i></a>
                        <a class="btn-color pbtn cdel delprod" id="d<?php echo $this->_tpl_vars['PROD'][$this->_sections['LE']['index']][0]; ?>
" title="Eliminar Producto"><i class="material-icons">close</i></a>
                    </td>
                </tr>
            <?php endfor; endif; ?>
            </tbody>
        </table>
        <br><br><br>
    </div>
</div>
<div id="modal-productos" class="modal modal-fixed-footer" style="width:70%;height:90%">
    <div class="modal-header">
        <ul class="tabs white-text" style="background-color:#0B3861">
            <li class="tab col s3 menuP but" id="tb1"><a class="white-text">Datos Productos</a></li>
            <li class="tab col s3 menuP but" id="tb2"><a class="white-text">Financiero</a></li>
            <li class="tab col s3 menuP but" id="tb3"><a class="white-text">Impuestos</a></li>
        </ul>
    </div>
    <div class="modal-content" style="padding: 0px;">
        <div id="datosproductos" style="padding: 30px 10px 0 10px">
            <div class="row">
                <div class="col s12 m12 l6" id="col1">
                    <div class="input-field marginzero">
                        <input id="vfamilia" type="text" class="validate autocomplete" autocomplete="off">
                        <label for="vfamilia">Familia</label>
                        <input type="hidden" id="vidfamilia" value="0">
                    </div>
                    <div class="input-field marginzero">
                        <input id="vtipo" type="text" class="validate autocomplete" autocomplete="off">
                        <label for="vtipo">Tipo</label>
                        <input type="hidden" id="vidtipo" value="0">
                    </div>
                    <div class="input-field marginzero">
                        <input id="vmarca" type="text" class="validate autocomplete" autocomplete="off">
                        <label for="vmarca">Marca</label>
                        <input type="hidden" id="vidmarca" value="0">
                    </div>
                    <div class="input-field marginzero">
                        <input id="vpeso" type="number" class="validate" min="0" autocomplete="off">
                        <label for="vpeso">Peso</label>
                    </div>
                    <div class="input-field marginzero">
                        <select type="select" id="vidunidad">
                            <option value="">Seleccione un Unidad</option>
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
                        <label for="vidunidad">Unidad</label>
                    </div>
                    <div class="input-field marginzero" id="dinventario">
                        <select type="select" id="vidinventario">
                            <option value="0">Seleccione un Inventario</option>
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['INV']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $this->_tpl_vars['INV'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['INV'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <label for="vidinventario">Inventario</label>
                    </div>
                </div>
                <div class="col s12 m12 l6" id="col2">
                <div class="input-field marginzero">
                    <input type="text" id="vnombre" class="formprod validate" value="" focus="1vcodigo" autocomplete="off">
                    <label for="vnombre">Nombre</label>
                </div>
                <div class="input-field marginzero">
                    <input type="text" id="vcodigo" class="formprod validate" value="" focus="1vminimo" autocomplete="off">
                    <label class="active" for="vcodigo">Código</label>
                    <input type="hidden" id="vid" value="0">
                    <input type="hidden" id="vidmoneda" value="1">
                    <input type="hidden" id="vidusuario" value="">
                    <input type="hidden" id="vidsucursal" value="">
                    <input type="hidden" id="vimg" value="">
                </div>
                <div class="input-field marginzero">
                    <input type="number" id="vminimo" class="formprod validate" value="" min="0" focus="1vmaximo" autocomplete="off">
                    <label class="active" for="vminimo">Mínimo</label>
                </div>
                <div class="input-field marginzero">
                    <input type="number" id="vmaximo" class="formprod validate" value="" min="0" focus="1vmaxdescuento" autocomplete="off">
                    <label class="active" for="vmaximo">Máximo</label>
                </div>
                <div class="input-field marginzero">
                    <i class="material-icons prefix">%</i>
                    <input type="number" id="vmaxdescuento" class="formprod validate" value="" min="0" focus="2vcosto" autocomplete="off">
                    <label class="active" for="vmaxdescuento">Descuento Máximo</label>
                </div><br><br>
                </div>
            </div>
        </div>
        <div id="financiero" class="row hide" style="padding: 20px 10px 0 10px">
            <label><b>Precio General</b></label><br><br>
            <div class="row">
                <div class="col s12 m6 l3  center-align">
                    <label>Precio Costo</label>
                    <div class="input-field">
                        <i class="material-icons prefix">¢</i>
                        <input type="text" id="vcosto" class="validate calcvv eder" value="0.00" data-mask="9999999999.99" focus="vganancia">
                        <input type="hidden" id="hvcosto" value="">
                    </div>
                </div>
                <div class="col s12 m6 l3 center-align">
                    <label>Ganancia</label>
                    <div class="input-field">
                        <i class="material-icons prefix">%</i>
                        <input type="text" id="vganancia" class="validate calcvv eder" value="0.00" data-mask="9999999999.99" focus="vventa">
                    </div>
                </div>
                <div class="col s12 m6 l3 center-align">
                    <label>Precio Venta</label>
                    <div class="input-field">
                        <i class="material-icons prefix">¢</i>
                        <input type="text" id="vventa" class="validate calcvv eder" value="0.00" data-mask="9999999999.99" focus="vexoneracion">
                        <input type="hidden" id="hventa" value="">
                    </div>
                </div>
                <div class="col s12 m6 l3 center-align">
                    <label>Exoneración</label>
                    <div class="input-field">
                        <i class="material-icons prefix">%</i>
                        <input type="text" id="vexoneracion" class="validate calcvv eder" value="0.00" data-mask="9999999999.99">
                    </div>
                </div>
            </div>
            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['NIV']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="row precionivel" id="f<?php echo $this->_tpl_vars['NIV'][$this->_sections['LE']['index']][0]; ?>
">
                <div class="col s12 m12 l3">
                    <label><b>Precio para Categoria: <?php echo $this->_tpl_vars['NIV'][$this->_sections['LE']['index']][1]; ?>
</b></label><br>
                </div>
                <div class="col s12 m6 l3 center-align"><br>
                    <label>Ganancia</label>
                    <div class="input-field">
                        <i class="material-icons prefix">%</i>
                        <input type="text" id="vganancia<?php echo $this->_tpl_vars['NIV'][$this->_sections['LE']['index']][0]; ?>
" class="validate calcvv eder" value="0.00" data-mask="9999999999.99">
                    </div>
                </div>
                <div class="col s12 m6 l3 center-align"><br>
                    <label>Precio Venta</label>
                    <div class="input-field">
                        <i class="material-icons prefix">¢</i>
                        <input type="text" id="vventa<?php echo $this->_tpl_vars['NIV'][$this->_sections['LE']['index']][0]; ?>
" class="validate calcvv eder" value="0.00" data-mask="9999999999.99">
                        <input type="hidden" id="hventa<?php echo $this->_tpl_vars['NIV'][$this->_sections['LE']['index']][0]; ?>
" value="">
                    </div>
                </div>
                <div class="col s12 m6 l3 center-align"><br>
                    <label>Exoneración</label>
                    <div class="input-field">
                        <i class="material-icons prefix">%</i>
                        <input type="text" id="vexoneracion<?php echo $this->_tpl_vars['NIV'][$this->_sections['LE']['index']][0]; ?>
" class="validate calcvv eder" value="0.00" data-mask="9999999999.99">
                    </div>
                </div>

            </div>
            <?php endfor; endif; ?>
        </div>
        <div id="dimpuestos" class="row hide" style="padding: 50px 10px 0 10px">
        <div class="col s12">
            <div class="input-field col s10">
                <select id="imp"></select>
                <label>Impuestos</label>
            </div>
            <div class="col s2">
                <button type="button" class="btn-floating waves-effect waves-light blue  z-depth-5" id="addimp"><i class="material-icons">add</i></button>
            </div>
            <div class="row">
                <div class="col s12">
                    <ul class="collection hide  z-depth-5" id="impuestos"></ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="modal-footer ">
        <a class="modal-action waves-effect waves-light btn-flat white-text blue z-depth-5" id="addprod">Agregar</a>
        <a class="modal-action waves-effect waves-light btn-flat white-text blue z-depth-5" id="editprod">Guardar</a>
        <a class="modal-action modal-close waves-effect waves-light btn-flat white-text blue z-depth-5" style="margin-right: 2%">Salir</a>
    </div>
</div>

<div id="modal-movinventario" class="modal modal-fixed-footer" style="width:70%;height:90%">
    <div class="modal-content" style="padding: 0px;">
        <ul class="tabs white-text" style="background-color:#0B3861">
            <li class="tab col s3 minvent but" id="mv1"><a class="white-text">Entrada Inventario</a></li>
            <li class="tab col s3 minvent but" id="mv2"><a class="white-text">Salida Inventario</a></li>
            <li class="tab col s3 minvent but" id="mv3"><a class="white-text">Movimiento Inventario</a></li>
        </ul>
        <ul class="tabs blue">
            <li class="tab col s3" style="width: 100%">
                <div class="row">
                    <div class="col s12 l6">
                        <a class="white-text">Producto:
                            <span id="nomprod"></span>
                            <input type="hidden" id="idprd" value="">
                            <input type="hidden" id="oldinvent" value="">
                        </a>
                    </div>
                    <div class="col s12 l6">
                        <a class="white-text">Cantidad:
                            <span id="prodcant"></span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
        <input type="hidden" id="spot" value="0">
        <div id="ininvent" class="movsinvent" style="padding: 15px 10px 0 10px">
            <div class="row">
                <div class="input-field col s12 l6">
                    <select type="select" id="inidbodega">
                        <option value="0">Seleccione una Bodega</option>
                    </select>
                    <label for="inidbodega">Bodega</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="inidinventario">
                        <option value="0">Seleccione un Inventario</option>
                    </select>
                    <label for="inidinventario">Inventario</label>
                </div>
                <div class="input-field col s12 l4">
                    <input id="vincantidad" type="text" class="validate">
                    <label for="vincantidad">Cantidad Entrante</label>
                </div>
                <div class="input-field col s12  l8">
                    <input type="text" id="vincomentario" class="materialize-textarea marginzero" length="150">
                    <label for="vincomentario">Comentario</label>
                </div>
            </div>
        </div>
        <div id="outinvent" class="movsinvent hide">
            <div class="row">
                <div class="input-field col s12 l6">
                    <select type="select" id="outidbodega">
                        <option value="0">Seleccione una Bodega</option>
                    </select>
                    <label for="outidbodega">Bodega Origen</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="outidinventario">
                        <option value="0">Seleccione un Inventario</option>
                    </select>
                    <label for="outidinventario">Inventario Origen</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="destidbodega">
                        <option value="0">Seleccione una Bodega</option>
                    </select>
                    <label for="destidbodega">Bodega Destino</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="destidinventario">
                        <option value="0">Seleccione un Inventario</option>
                    </select>
                    <label for="destidinventario">Inventario Destino</label>
                </div>
                <div class="input-field col s12 l6">
                    <input id="voutcantidad" type="text" class="validate">
                    <label for="voutcantidad">Cantidad Saliente</label>
                </div>
                <div class="input-field col s12 l6">
                    <input type="text" id="voutcomentario" class="materialize-textarea marginzero" length="150">
                    <label for="voutcomentario">Comentario</label>
                </div>
            </div>
        </div>
        <div id="movinvent" class="movsinvent hide">
            <div class="row">
                <div class="input-field col s12 l6">
                    <select type="select" id="movidbodega">
                        <option value="0">Seleccione una Bodega</option>
                    </select>
                    <label for="movidbodega">Bodega Origen</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="movidinventario">
                        <option value="0">Seleccione un Inventario</option>
                    </select>
                    <label for="movidinventario">Inventario Origen</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="didbodega">
                        <option value="0">Seleccione una Bodega</option>
                    </select>
                    <label for="didbodega">Bodega Destino</label>
                </div>
                <div class="input-field col s12 l6">
                    <select type="select" id="didinventario">
                        <option value="0">Seleccione un Inventario</option>
                    </select>
                    <label for="didinventario">Inventario Destino</label>
                </div>
                <div class="input-field col s12 l12">
                    <input type="text" id="vmovcomentario" class="materialize-textarea marginzero" length="150">
                    <label for="vmovcomentario">Comentario</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="modal-action waves-effect waves-light btn-flat white-text blue  z-depth-5" id="actinv">Guardar</a>
        <a class="modal-action modal-close waves-effect waves-light btn-flat white-text blue  z-depth-5" style="margin-right: 2%">Salir</a>
    </div>
</div>

<div id="modal-descuentos" class="modal modal-fixed-footer" style="width:70%;height:90%">
    <div class="modal-header">
        <ul class="tabs white-text" style="background-color:#0B3861">
            <li class="tab col s3"><a class="white-text">AGREGAR DESCUENTO A <span id="dprod"></span></a></li>
        </ul>
    </div>
    <div class="modal-content" stylle="padding: 0px;">
        <div class="row">
            <div class="col s11 m6">
                <div class="input-field col s10">
                    <select id="dscts"></select>
                    <label>Seleccione un Descuento</label>
                    <input type="hidden" id="idproducto" class="form-control" value="">
                </div>
                <div class="col s1 m2">
                    <button type="button" class="btn-floating waves-effect waves-light blue z-depth-5" id="adddsct"><i class="material-icons">add</i></button>
                </div>
            </div>
            <div class="col s6" id="tbldesc">
                <h5>Descuentos</h5>
                <ul class="collection " id="listadescuentos"></ul>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="modal-action waves-effect waves-light btn-flat white-text blue z-depth-5" id="gdesc">Guardar</a>
        <a class="modal-action modal-close waves-effect waves-light btn-flat white-text  z-depth-5" style="margin-right: 2% !important;"> Salir</a>
    </div>
</div>
</div> <!-- End mantProductos -->

<script src="../assets/js/jquery.mask.min.js"></script>