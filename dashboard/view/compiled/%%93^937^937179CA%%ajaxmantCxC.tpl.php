<?php /* Smarty version 2.6.17, created on 2017-04-18 00:00:14
         compiled from ajax/cuentas/ajaxmantCxC.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'ajax/cuentas/ajaxmantCxC.tpl', 76, false),)), $this); ?>
      <link rel="stylesheet" href="../assets/css/modulos/style-cuentas.css">

      <nav class="nav-extended  white-text z-depth-5" style="background-color:#0B3861">
          <div class="nav-wrapper">
            <h4 align="center">Cuentas por Cobrar</h4>

        </div>
    </nav>
    <div id="mantCxC">



        <div class="card z-depth-5">

            <div class="row">
                <br><br>

                <div class="input-field col s7">

                    <a class="prefix dropdown-button tooltipped "  data-activates='filtr_1' data-position="button" data-tooltip="Cambiar Filtro"><i class="small material-icons">search</i></a>
                    <ul id='filtr_1' class='dropdown-content'>
                        <li><a href="#!" fltr="1">Nombre</a></li>
                        <li><a href="#!" fltr="2">Cédula</a></li>
                        <li><a href="#!" fltr="3">Teléfono</a></li>
                    </ul>
                    <input type="text" id="search_clientes" maxlength="100" num="v29" var="nombre">
                    <label class="truncate" for="search_clientes">Buscar Cliente por Nombre o Cédula</label>

                </div>
                <div class="col s5">
                    <div class="col s4">
                        <input name="ctas" class="with-gap" type="radio" id="all" checked value="1" />
                        <label for="all">Todo</label>
                    </div>
                    <div class="col s4">
                        <input name="ctas" class="with-gap" type="radio" id="vencidas" value="2" />
                        <label for="vencidas">Vencidas</label>
                    </div>
                    <div class="col s4">
                        <input name="ctas" class="with-gap" type="radio" id="porvencer" value="3" />
                        <label for="porvencer">Por Vencer</label>
                    </div>
                </div>


            </div>
            <br>

            <div class="card-block">
                <div class="row">
                    <div class="col s12">
                        <table id="data-table-cuentas" class="table centered highlight bordered responsive-table z-depth-5 ">
                            <thead>
                                <tr>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Factura</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important; width: 13%">Nombre</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Cédula</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Fecha</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Saldo</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Plazo</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Días</th>
                                    <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Sucursal</th>


                                </tr>
                            </thead>
                            <tbody id="listaCuentasxC">
                               <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['CLI']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                               <tr class="button-collapse detalle" data-activates="acciones" id="f<?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][0]; ?>
" tipo ='1' tp="<?php if ($this->_tpl_vars['CLI'][$this->_sections['LE']['index']][7] < 0): ?>1<?php else: ?>0<?php endif; ?>">
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][3]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][1]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][2]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][5]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][6]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][8]; ?>
</td>
                                <td style="<?php if ($this->_tpl_vars['CLI'][$this->_sections['LE']['index']][7] < 0): ?>color:red;<?php else: ?>color:green<?php endif; ?>"><?php echo smarty_function_math(array('equation' => 'abs(x)','x' => $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][7]), $this);?>
</td>
                                <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][9]; ?>
</td>

                            </tr>
                            <?php endfor; endif; ?>
                        </tbody>
                    </table>
                    <br>

                </div>
            </div>
        </div>
        

    </div>
    <ul id="acciones" class="side-nav side-nav-cuentas"  style="width: 60%">


        <div class="card-header center white-text" style="background-color:#0B3861" >
            <p class="flow-text" style="font-size: 1.9em;">Detalle de la Cuenta</p>
        </div>
        <div class="row">
            <div class="col s12 m12">
              <div class="card blue z-depth-5">
                <div class="card-content white-text center-align" style="padding-top: 0.5% !important; padding-bottom: 0 !important">
                    <span class="card-title "><b>Factura: <span id="ifac"> </span></b></span> </div>
                    <br>
                    <div class="card-content white-text " style="padding-top: 0.1% !important">

                      <div class="row ">
                          <div class="col s6 m4 l3">
                              <p>Nombre: <span id="inombr"> </span></p>
                          </div>
                          <div class="col s12 m4 l3">
                            <p>Fecha: <span id="ifecha"> </span></p>
                        </div>
                        <div class="col s12 m4 l2">
                            <p>Saldo: <span id="isaldo"> </span></p>
                        </div>
                        <div class="col s12 m4 l2">
                            <p>Plazo: <span id="iplazo"> </span></p>
                        </div>
                        <div class="col s12 m6 l2">
                            <p>Dias del credito : <span id="idias"> </span></p>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col s12">
                <table id="data-table-cuentas-detalle" class="table centered highlight bordered responsive-table z-depth-5 ">
                    <thead>
                        <tr>
                            <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Movimientos</th>
                            <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Fecha</th>
                            <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Saldo</th>


                        </tr>
                    </thead>
                    <tbody id="listaCuentasxC">
                       <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['CLI']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                       <tr id="f<?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][0]; ?>
">
                       <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][5]; ?>
</td>
                        <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][5]; ?>
</td>
                        <td><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][8]; ?>
</td>


                    </tr>
                    <?php endfor; endif; ?>
                </tbody>
            </table>
            <br>

        </div>
    </div>
</div>


</ul>







<div class="modal fade" id="modal-desgloce">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="col-md-6 col-lg-6" align="left" style="margin-top: 2%">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <h4 class="modal-title form-horizontal" id="titmCxC"><small>Detalle Desglosado: </small></h4>
                            <h5 class="form-horizontal"><b>Factura-<span id="numFCxC">5489</span></b></h5>
                        </div>
                    </div>
                </div>
                <div class="col m6" align="center">
                    <button type="button" id="expExcel" class="btn btn-success der" style="margin-right: 15px; padding: 3px 9px; border-radius: 42px;" title="Exportar a Excel"><i class="fa fa-file-excel-o" aria-hidden="true" style="font-size: 0.9em"></i></button>
                    <button type="button" id="expExcel" class="btn der" style="background: #D9534F; color: #fff; margin-right: 15px; padding: 3px 9px; border-radius: 42px;" title="Exportar a PDF"><i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 0.9em"></i></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col m12">
                        <div class="input-group">
                            <span class="input-group-addon">Proveedor</span>
                            <input type="text" class="form-control" id="nomProvCxC" value="Logintech S.A" readonly>
                        </div>
                    </div>
                </div>
                <div class="row eder" style="margin-top: 0.5%">
                    <div class="col m3">
                        <div class="input-group">
                            <span class="input-group-addon">Plazo</span>
                            <input type="text" class="form-control form-control-sm" value="60" readonly>
                            <span class="input-group-addon">días</span>
                        </div>
                    </div>
                    <div class="col m3">
                        <div class="input-group">
                            <span class="input-group-addon">Restantes</span>
                            <input type="text" class="form-control form-control-sm" value="-30" readonly>
                            <span class="input-group-addon">días</span>
                        </div>                        
                    </div>
                </div>
                <hr>
                <!-- Fecha del Rubro Usuario Tipo    Saldo   Monto   Debe    Haber -->
                <table class="table table-sm" align="center">
                    <thead align="center">
                        <tr>
                            <th>Fecha de Rubro</th>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th>Saldo</th>
                            <th>Monto</th>
                            <th>Debe</th>
                            <th>Haber</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>21 de abril del 2016, 13:03:32</td>
                            <td>ESTEBAN VARGAS</td>
                            <td>Ingreso</td>
                            <td>142,764.45</td>
                            <td>142764.45</td>
                            <td>0.00</td>
                            <td>142,764.45</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--  -->
<div class="modal fade" id="modal-pago">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="row">
                    <div class="col m6">
                        <h4 class="modal-title form-horizontal" id="titmCxC"><small>Realizar Pago a: </small></h4>
                        <h5 class="form-horizontal"><b>Factura-<span id="numFCxC">5489</span></b></h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col m7">
                        <div class="input-group">
                            <span class="input-group-addon">Saldo adeudado</span>    
                            <input type="text" class="form-control" value="0" id="totSaldoAdeud" readonly>
                        </div>
                    </div>
                    <div class="col m5">
                        <div class="input-group">
                            <span class="input-group-addon"><b>Saldo</b></span>    
                            <input type="text" class="form-control" value="0" id="totSaldoVig" readonly style="font-weight: 800">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-10 col-lg-10">
                        <div class="input-group" id="inpG">
                            <span class="input-group-addon">Monto</span>    
                            <input type="text" class="form-control" value="0.00" id="totAbonoF" placeholder="Valor a Pagar" data-mask="999999999.99">
                            <span class="input-group-addon">¢</span>
                        </div>
                        <span id="errF" class="text-muted" style="color: #D9534F; margin-left: 19%"></span>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <button type="button" id="realPagoCxC" class="btn btn-primary der" style="margin-right: 15px; padding: 12px 13px; border-radius: 42px;" title="Realizar Pago"><i class="fa fa-money fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <label class="c-input c-checkbox">
                            <input type="checkbox" id="cobInteres">
                            <span class="c-indicator"></span>
                            Cobrar Intereses
                        </label>
                    </div>
                    <div class="col-md-6 col-lg-6" id="interes" style="display: none">
                        <div class="input-group">
                            <span class="input-group-addon">Total Interés</span>    
                            <input type="text" class="form-control form-control-sm" value="0.00" id="totInt" placeholder="Valor a Pagar" data-mask="999999999.99" readonly>
                            <span class="input-group-addon">¢</span>
                        </div>
                        <span class="text-muted der"><small>Total de interés generado</small></span>
                    </div>
                    <div class="col-md-2 col-lg-2"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--  -->
<div class="modal fade" id="modal-nota">
    <div class="modal-dialog" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4 class="modal-title form-horizontal" id="titmCxC"><small>Nota de Crédito para: </small></h4>
                        <h5 class="form-horizontal"><b>Factura-<span id="numFCxC">5489</span></b></h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">Total de Factura</span>    
                            <input type="text" class="form-control" value="0" id="totSaldoFact" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon"><b>Saldo a Favor</b></span>    
                            <input type="text" class="form-control" value="0" id="totSaldoVig" aria-label="Amount (rounded to the nearest dollar)" readonly style="font-weight: 800">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-10 col-lg-10">
                        <div class="input-group" id="inpG">
                            <span class="input-group-addon">Monto</span>    
                            <input type="text" class="form-control" value="0.00" id="totAbonoN" aria-label="Amount (rounded to the nearest dollar)" placeholder="Valor de la Nota" data-mask="999999999.99">
                            <span class="input-group-addon">¢</span>
                        </div>
                        <span id="errN" class="text-muted" style="color: #D9534F; margin-left: 19%"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="card-header"><h6>Detalle de Nota</h6></div><br>
                    <div class="col-md-5 col-lg-5">
                        <div class="input-group">
                            <span class="input-group-addon">Referencia</span>
                            <input type="text" class="form-control" id="numRefN" placeholder="Num. Referencia" data-mask="999999999">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div class="input-group">
                            <span class="input-group-addon">Comentario</span>
                            <textarea name="" id="comentN" class="form-control" rows="2" required="required" placeholder="Detalle..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="button" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--  -->
<div class="modal fade" id="modal-devolucion">
    <div class="modal-dialog" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4 class="modal-title form-horizontal" id="titmCxC"><small>Devolución de: </small></h4>
                        <h5 class="form-horizontal"><b>Factura-<span id="numFCxC">5489</span></b></h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td style="width: 10%"></td>
                            <th>Producto</th>
                            <th>Precio Unit</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 10%">
                                <label class="c-input c-checkbox">
                                    <input type="checkbox" id="elemet">
                                    <span class="c-indicator"></span>
                                </label>
                            </td>
                            <td>Producto 1</td>
                            <td>¢12,050.00</td>
                            <td style="width: 20%">
                                <div class="row">
                                    <span>3</span>
                                    <div class="col-md-10 col-lg-10" hidden>
                                        <input type="number" class="form-control" min="0">
                                    </div>
                                </div>
                            </td>
                            <td>¢36,150.00</td>
                        </tr>
                    </tbody>
                </table>
                <hr>

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon">Comentario</span>
                            <textarea id="comentD" class="form-control" rows="2" placeholder="Detalle..."></textarea>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-5 col-lg-5"></div>
                    <div class="col-md-7 col-lg-7">
                        <div class="input-group">
                            <span class="input-group-addon">Total Devolución</span>    
                            <input type="text" class="form-control" id="totDevo" value="0" readonly>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="button" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>

</div> <!-- mantCxC -->