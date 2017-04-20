<?php /* Smarty version 2.6.17, created on 2017-04-19 23:33:03
         compiled from ajax/ajustes/ajaxDatosEmpresa.tpl */ ?>


<div class="card z-depth-5">
    <ul class="collapsible" data-collapsible="accordion">
      <li>
          <div class="collapsible-header "><i class="small material-icons">work</i><h5>Datos de la Empresa</h5></div>

          <div class="collapsible-body"><div class="card-block">
            <div class="row">
                <div class="col s12 m12 l6">
                    <label for="vnombre">Nombre de la Empresa</label>
                    <input type="text" class="infoempresa validate" id="vnombre" field="empresa">
                </div>
                <div class="col s12 m12 l6">
                    <label for="vcedula">Cédula Jurídica</label>
                    <input type="text" class="infoempresa validate" id="vcedula" field="CJuridica">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <label for="vtelefono">Teléfonos de la Empresa</label>
                    <input type="text" class="infoempresa validate" id="vtelefono" field="telefonos">
                </div>
                <div class="col s12 m12 l6">
                    <label for="vcorreo">Correo Principal de la Empresa</label>
                    <input type="email" class="infoempresa validate" id="vcorreo" field="correo">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l6">
                    <label for="vdireccion">Dirección de la Empresa</label>
                    <input type="text" class="infoempresa validate" id="vdireccion" field="direccion">
                </div>
                <div class="col s12 m12 l6">
                    <div class="col s6 m4">
                        <img src="#" class="responsive-img" alt="Image" width="200px" height="100px" id="vlogo">
                    </div>
                    <div class="col s6 m6">

                        <div class="file-field ">
                          <div class="btn z-depth-5">
                            <i class="small material-icons right">perm_media</i>Logo
                            <input type="file" id="archivo" name="imagen" multiple="false" class="file-loading">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col s12 m12 pull-s2">

             <button type="button" class="btn btn-primary der z-depth-5" id="actinfo"><i class="small material-icons right">loop</i>Actualizar</button>
         </div>
     </div>


 </div></div>
 <!-- Datos de la empresa -->
</li>
<li>
    <div class="collapsible-header"><i class="material-icons">verified_user</i><h5>Monedas</h5></div>

    <div class="collapsible-body"><div class="class-block">


        <br>
        <div class="row"> 

            <div class="col s12 m12 l6">
                <div class="row">
                  <div class="col s9 m4 l6 offset-s3">
                    <a href='#modal-wsdl' id="mantWsdl" class="btn-large  tooltipped modal-trigger z-depth-5 truncate" data-position="left" data-tooltip="WSDL" style="margin-top: 5%; margin-bottom: 1%; margin-right: 1%;">Manenimiento WSDL</a>
                </div>
                <div class="col s10 m4 l6 offset-s3 offset-m1">
                    <a href='#modal-monedas' id="addMoneda" class="btn-large  tooltipped modal-trigger z-depth-5 truncate" data-position="top" data-tooltip="Ingresar Moneda" style="margin-top: 5%; margin-bottom: 1%; margin-right: 1%;">Agregar Moneda</a>
                </div>

            </div>
            <br>
        </div>

        <div class="col s12 m12 l5">
            <table class="table bordered highlight responsive-table z-depth-3 centered" id="data-table-monedas" style="margin: 1%;">
                <thead>
                    <tr>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Símbolo</th> 
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important; width: 100%;">Moneda</th> 
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important; width: 100%;">Valor</th> 
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important; width: 100%;">Acciones</th>
                    </tr>
                </thead>
                <tbody id="listamonedas">
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['MON']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr id="a_<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][0]; ?>
">
                        <td <?php if ($this->_tpl_vars['MON'][$this->_sections['LE']['index']][3] != ''): ?> class="tooltipped" style="background-color: rgba(99, 190, 29, 0.3);" data-position="top" data-tooltip="Moneda por Defecto"<?php endif; ?>><?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][4]; ?>
</td>
                        <td><?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][1]; ?>
</td>
                        <td><?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][2]; ?>
</td>
                        <td>
                         <a class="waves-effect waves-light load" id="a<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][0]; ?>
" data-target="modal" href='#modal-monedas' modulo="moneda" title="Editar Moneda"><i class="material-icons left">mode_edit</i></a>

                         <a class="waves-effect waves-light delete" modulo="moneda" id="b<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][0]; ?>
"  title="Eliminar Moneda"><i class="material-icons left">delete</i></a>

                     </td>
                 </tr>
                 <?php endfor; endif; ?>
             </tbody>
         </table>
     </div>
 </div>
</div>    <br></div>
<!-- Datos de las monedas -->
</li>
<li>
    <div class="collapsible-header"><i class="material-icons">supervisor_account</i><h5>Tipo de Usuarios</h5></div>

    <div class="collapsible-body"><div class="class-block">
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

                       <input type="text" id="vnombre_tusuario" style="margin-left: 15% !important;">
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
</div></div>
</div><br></div>
<!-- Datos de las Usuarios -->
</li>
<li>
    <div class="collapsible-header"><i class="medium material-icons">credit_card</i><h5>Tipo de Pagos</h5></div>

    <div class="collapsible-body"><div class="class-block">
        <br>
        <div class="row">

        </div>
        <div class="row">
            <div class="col s12 m12 l5">
                <div class="input-field col s11 m9 l11">
                    <a class="prefix" style="margin-left: 5% !important;"><i class="small material-icons">search</i></a>
                    <input type="text" id="search_tipopagos" maxlength="100" num="+26" var="nombre" style="margin-left: 15% !important;">
                    <label for="search_tipopagos" style="margin-left: 15% !important;">Buscar Tipo Pago</label>
                </div>

                <div id="ftipopagos" class="col s11 m9 l11 ">

                    <div class="row">
                        <div class="input-field col s12">

                            <a class="prefix btn-floating blue add tooltipped z-depth-5" modulo="tipopago" data-position="top" data-tooltip="Ingresar Tipo de Pago" style="padding-right: 5% !important;"><i class="small material-icons">add</i></a>

                            <input type="text" id="vnombre_pago" style="margin-left: 15% !important;">
                            <label for="vnombre_pago" style="margin-left: 15% !important;">Ingresar Tipo Pago</label>
                        </div>



                    </div>
                    <br>
                    <div class="modal modal-fixed-footer" id="modal-tipopagos">

                        <div class="modal-header" style="background-color:#0B3861" >
                            Editar Tipo Pago "<span id="pname-mod"></span>"
                            <input type="hidden" id="vid" value="0">
                        </div>

                        <div class="modal-content">

                            <div class="row">
                                <div class="col s12">
                                    <div class="input-field">    
                                        <input type="text" id="tmp_pagos">
                                        <label id="tmp_l_pagos" for="tmp_pagos">Nombre del Pago</label>
                                    </div>

                                </div>

                                <div class="input-field col s12" style="margin-top: 0px;">

                                    <div class="row mix">
                                        <div class="col s6">
                                            <input class="with-gap" name="vbancos" type="radio" id="vbancos" value="0" checked />
                                            <label for="vbancos">No Aplica Bancos</label><br>
                                        </div>
                                        <div class="col s6">
                                            <input class="with-gap" name="vbancos" type="radio" id="acr" value="1" />
                                            <label for="acr">Acredita Bancos</label><br>
                                        </div>
                                        <div class="col s6">
                                            <input class="with-gap" name="vbancos" type="radio" id="dat" value="2" />
                                            <label for="dat">Uso de Datáfono</label><br>
                                        </div>
                                        <div class="col s6">
                                            <input class="with-gap" name="vbancos" type="radio" id="cons" value="3" />
                                            <label for="cons">Consignacion</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mix">
                                        <div class="col s4">
                                            <input type="checkbox" id="extra" />
                                            <label for="extra">Tiene Extras</label>
                                        </div>

                                        <div class="input-field col s4 extra hide">
                                            <input type="text" id="vextra">
                                            <label for="vextra">Nombre de la Extra</label>
                                        </div>

                                        <div class="input-field col s4 extra hide">
                                            <input type="text" id="vregex">
                                            <label for="vregex">Expresión regular</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col s4">
                                            <input type="checkbox" name="vprincipal" id="vprincipal" />
                                            <label for="vprincipal">Pago Principal</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
                            <button type="button" class="btn btn-primary edit" modulo="tipopago">Guardar</button>
                        </div>

                    </div>

                </div>
            </div>



            <div class="col s12 m12 l5">
                <table class="table highlight centered responsive-table z-depth-3" id="data-table-tipopagos">
                   <thead>
                    <tr>
                        <th class="white-text blue" style="border: 0px;  border-radius: 0px !important">Tipo</th>
                        <th class="white-text blue" style="border: 0px;  border-radius: 0px !important; width: 100%">Accion</th>
                    </tr>
                </thead>
                <tbody id="listatipopagos">
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['TPAG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr id="c_<?php echo $this->_tpl_vars['TPAG'][$this->_sections['LE']['index']][0]; ?>
">
                        <td <?php if ($this->_tpl_vars['TPAG'][$this->_sections['LE']['index']][2] != 0): ?> class="tooltipped" style="background-color: rgba(99, 190, 29, 0.3);" data-position="top" data-tooltip="Tipo Pago Principal"<?php endif; ?>><input class="center-align" type="text"  value="<?php echo $this->_tpl_vars['TPAG'][$this->_sections['LE']['index']][1]; ?>
" readonly style="border: 0px;margin: 0px; padding: 0px;"></td>
                        <td >
                            <a class="waves-effect waves-light load_x" modulo="tipopago" id="e<?php echo $this->_tpl_vars['TPAG'][$this->_sections['LE']['index']][0]; ?>
" title="Editar Tipo Pago" href='#modal-tipopagos' ><i class="material-icons left">mode_edit</i></a>
                            <?php if ($this->_tpl_vars['TPAG'][$this->_sections['LE']['index']][0] != 0): ?>
                            <a class="waves-effect waves-light delete" modulo="tipopago" id="f<?php echo $this->_tpl_vars['TPAG'][$this->_sections['LE']['index']][0]; ?>
"  title="Eliminar Tipo Pago"><i class="material-icons left">delete</i></a>
                            <?php endif; ?>

                        </td>
                    </tr>
                    <?php endfor; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><br>
</div>
<!-- Datos de Tipos de Pagos  -->
</li>
<li>
    <div class="collapsible-header"><i class="material-icons">business</i><h5>Bancos</h5></div>

    <div class="collapsible-body"><div class="class-block">
        <br>
        
        <div class="row">
            <div class="col s12 m12 l5">
                <div class="input-field col s11 m9 l11">
                    <a class="prefix" style="margin-left: 5% !important;"><i class="small material-icons">search</i></a>
                    <input type="text" id="search_bancos" maxlength="100" num="+202" var="nombre" style="margin-left: 15% !important;">
                    <label for="search_bancos" style="margin-left: 15% !important;">Buscar Banco</label>
                </div>

                <div id="fbancos" class="col s11 m9 l11">

                    <div class="row">

                        <div class="input-field col s12">
                            <a class="prefix btn-floating blue add tooltipped z-depth-5" modulo="banco" varias="1" data-position="top" data-tooltip="Ingresar Banco" style="padding-right: 5% !important;"><i class="small material-icons">add</i></a>
                            <input type="text" id="vnombre_banco" noClear="1"style="margin-left: 15% !important;">
                            <label for="vnombre_banco" style="margin-left: 15% !important;">Ingresar Banco</label>
                        </div>



                    </div>

                    <div class="modal modal-fixed-footer" id="modal-bancos" style="width: 65%;min-height: 550px">

                        <div class="modal-header" style="background-color:#0B3861">
                            Valores del Banco "<span id="bname-mod" type="html"></span>"
                            <input type="hidden" id="vid" value="0">
                        </div>

                        <div class="modal-content">
                            <div class="row">
                                <div class="col s12 m6">

                                    <div vtabla="detallebanco" detalle="1" vnum="203">
                                        <h4 class="center-align">Cuentas Bancarias</h4>
                                        <div class="row">
                                            <div class="input-field col s12 l6">
                                                <input type="text" id="vdet_nom">
                                                <label for="vdet_nom">Nombre de Cuenta</label>
                                            </div> 

                                            <div class="input-field col s12 l6">
                                                <input type="text" id="vdet_cta">
                                                <label for="vdet_cta">Número de Cuenta</label>
                                            </div> 

                                            <div class="input-field col s12 l6">
                                                <select type="select" id="vdat_moneda">
                                                    <optgroup label="Porcentual">
                                                        <option value="" selected>Porcentaje</option>
                                                    </optgroup>
                                                    <optgroup label="Valor Fijo">
                                                        <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['MON']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                        <option value="<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][0]; ?>
" simb="<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][4]; ?>
"><?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][1]; ?>
</option>
                                                        <?php endfor; endif; ?>
                                                    </optgroup>
                                                </select>
                                                <label for="vdat-moneda">Tipo de Comisión</label>
                                            </div> 

                                            <div class="input-field col s12 l6">
                                                <select type="select" id="vctacom" defecto="1" noClear="1">
                                                    <option value="" disabled>Seleccione una Cuenta</option>
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
                                                <label for="vctacom">Cuenta Comisión de Datáfono</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input type="number" id="vcomision_txt" class="eder" value="0" noClear="1">
                                                <label for="vcomision_txt">Comisón pot Datáfono</label>
                                            </div>

                                            <div class="input-field col s12 l6">
                                                <select type="select" id="vdet_moneda">
                                                    <option value="" disabled selected>Seleccione una Moneda</option>
                                                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['MON']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <option value="<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][0]; ?>
" simb="<?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][4]; ?>
"><?php echo $this->_tpl_vars['MON'][$this->_sections['LE']['index']][1]; ?>
</option>
                                                    <?php endfor; endif; ?>
                                                </select>
                                                <label for="vdet-moneda">Moneda de la Cuenta</label>
                                            </div> 

                                            <div class="input-field col s12 l6">
                                                <select type="select" id="vctabnk">
                                                    <option value="" disabled selected>Seleccione una Cuenta</option>
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
                                                <label for="vctabnk">Cuenta Contable Asociada</label>
                                            </div>
                                        </div>
                                        <a class="btn-floating small der z-depth-5" id="add_x"><i class="material-icons blue">add</i></a>
                                    </div>

                                </div>

                                <div class="col s6">
                                    <ul class="collection" id="fdetallebancos" tp="1">

                                    </ul>
                                </div>
                            </div>
                            

                        </div>

                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat z-depth-5">Salir</a>
                            <button type="button" class="btn btn-primary edit  z-depth-5" modulo="banco" varias="1">Guardar</button>
                        </div>

                    </div>

                </div>


                <br>
            </div>


            <div class="col s12 m12 l5">
                <table class="table responsive-table centered z-depth-3 bordered" id="data-table-bancos">
                    <thead>
                        <tr>
                            <th  class="white-text blue" style="border: 0px; border-radius: 0px !important ">Nombre</th>
                            <th  class="white-text blue" style="border: 0px; border-radius: 0px !important; width: 100% ">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listabancos">
                        <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['BNK']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <tr id="e_<?php echo $this->_tpl_vars['BNK'][$this->_sections['LE']['index']][0]; ?>
">
                            <td><input type="text" value="<?php echo $this->_tpl_vars['BNK'][$this->_sections['LE']['index']][1]; ?>
" class="fast-edit center-align" style="border: 0px;margin: 0px; padding: 0px;"></td>
                            <td style="width: 50% !important">

                               <a class="waves-effect load" modulo="banco" varias="1" id="i<?php echo $this->_tpl_vars['BNK'][$this->_sections['LE']['index']][0]; ?>
" href='#modal-bancos' title="Valores del Banco" ><i class="material-icons left">mode_edit</i></a>

                               <a class="waves-effect" modulo="banco" id="j<?php echo $this->_tpl_vars['BNK'][$this->_sections['LE']['index']][0]; ?>
"  title="Eliminar Banco"><i class="material-icons left">delete</i></a>

                           </td>
                       </tr>
                       <?php endfor; endif; ?>
                   </tbody>
               </table>
           </div>
       </div>
   </div><br></div>
   <!-- Datos de los Bancos  -->
</li>
<li>
    <div class="collapsible-header"><i class="material-icons">settings</i><h5>Categorías</h5></div>

    <div class="collapsible-body"><div class="class-block">
        <br>
        
        <div class="row">

            <div class="col s12 m12 l5">
                <div class="row">
                <div class="input-field col s11 m9 l11">
                        <a class="prefix" style="margin-left: 5% !important;"><i class="small material-icons">search</i></a>
                        <input type="text" id="search_nivelesclientes" maxlength="100" num="+69" var="nombre" style="margin-left: 15% !important;">
                        <label for="search_nivelesclientes" style="margin-left: 15% !important;">Buscar Categoría</label>
                    </div>

                    <div id="fnivelesclientes" class="col s11 m9 l11 ">

                        <div class="row">
                            <div class="input-field col s12">
                                <a class="prefix btn-floating blue add tooltipped z-depth-5" modulo="nivelescliente" data-position="top" data-tooltip="Ingresar Categoría" style="padding-right: 5% !important;"><i class="small material-icons">add</i></a>


                                <input type="text" id="vnombre_nivel" style="margin-left: 15% !important;">
                                <label for="vnombre_nivel" style="margin-left: 15% !important;">Ingresar Categoría</label>
                            </div>
                            

                        </div>

                    </div>

                </div>




            </div>



            <div class="col s12 m12 l5">
                <table class="table centered highlight bordered responsive-table z-depth-3" id="data-table-nivelesclientes">
                    <thead>
                        <tr>
                            <th class="white-text blue" style="border: 0; border-radius: 0px !important">Nombre</th>
                            <th class="white-text blue" style="border: 0; border-radius: 0px !important;  width: 100%;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listanivelesclientes">
                        <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['CATC']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <tr id="d_<?php echo $this->_tpl_vars['CATC'][$this->_sections['LE']['index']][0]; ?>
">
                            <td><input type="text" id="vnombre" class="fast-edit fast-edit-r center-align" value="<?php echo $this->_tpl_vars['CATC'][$this->_sections['LE']['index']][1]; ?>
" style="border: 0px;margin: 0px; padding: 0px;" maxlength="20"></td>
                            <td style=" width: 50%;">
                                <a class="waves-effect waves-light load_x" id="g<?php echo $this->_tpl_vars['CATC'][$this->_sections['LE']['index']][0]; ?>
" href='#modal-valorescat' title="Valores en el Sistema"><i class="material-icons left">mode_edit</i></a>

                                <a class="waves-effect waves-light load_x" modulo="nivelescliente" id="h<?php echo $this->_tpl_vars['CATC'][$this->_sections['LE']['index']][0]; ?>
" title="Eliminar Nivel de Cliente"><i class="material-icons left">delete</i></a>


                            </td>
                        </tr>
                        <?php endfor; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div></div>
    <!-- Datos de las Categorías -->
</li>
<li>
    <div class="collapsible-header"><i class="material-icons">schedule</i><h5>Período Fiscal</h5></div>

    <div class="collapsible-body"><div class="card-block">
        <div class="row">
            <div class="col s12 m4">
                <div class="input-group">
                    <div class="input-group-addon"><b>Fecha Inicio</b></div>




                    <input type="date" class="datepicker" id="vfechainicio" value="">
                </div>
            </div>
            <div class="col s12 m4">
                <div class="input-group">
                    <div class="input-group-addon"><b>Fecha Cierre</b></div>
                    <input type="date" class="datepicker" id="vfechafinal" value="">
                </div>
            </div>
            <div class="col s12 m1">
               <br>
               <button type="button" class="btn btn-primary z-depth-5" id="sfechafiscal" style="margin-top: 5%;">Guardar</button>
           </div>
       </div><br>
       <div class="row">

       </div>
   </div>

</div></div>
<!-- Datos del Período Fiscal -->
</li>
</ul>





<div class="modal modal-fixed-footer " id="modal-monedas">

    <div class="modal-content">
        <div id="fmonedas">
            <input type="hidden" id="vid" value="0">
            <div class="row">

                <div class="input-field col s12 m6">
                    <label for="vnombremon" class="truncate">Nombre de Moneda</label>
                    <input type="text" id="vnombremon" maxlength="45">
                </div>

                <div class="input-field col s12 m6">
                    <label for="vsimbolo" class="truncate">Símbolo de Moneda</label>
                    <input type="text" id="vsimbolo" maxlength="1">
                </div>

            </div>

            <div class="class">

                <div class="input-field col s12">
                    <label for="vvalor" class="truncate">Valor de Moneda</label>
                    <input type="number" id="vvalor" value="0.00" class="eder"> 
                </div>

            </div>

            <label class="row">
                <div class="input-field col s6">
                    <input type="checkbox" name="vprincipal" id="principal" value="0" />
                    <label for="principal">Moneda Principal</label>
                    <input type="hidden" id="vprincipal" value="0">
                </div>

                <div class="input-field col s6">
                    <input type="checkbox" id="iswsdl" name="iswsdl" stay="0" changed="1" />
                    <label for="iswsdl">Valor por WSDL</label>
                </div>
            </label>

            <div class="wsdl-op">
              <br>
                <div class="input-field" >
                    <select id="vwsdl" type="select" noClear="1">
                        <option value="0">Seleccione un WSDL</option>
                        <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['WSDL']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <option value="<?php echo $this->_tpl_vars['WSDL'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['WSDL'][$this->_sections['LE']['index']][1]; ?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                    <label>WSDL</label>
                </div>

                <div class="row">

                <div class="input-field col s6">
                    <input type="text" id="vsuma" />
                    <label for="vsuma">Sumar al Valor del WSDL</label>
                </div>

                </div>


        </div>
    </div>
</div>
<br>
<div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
    <button type="button" class="btn btn-primary add" modulo="moneda" id="monbtn">Agregar</button>
</div>

</div><!-- /.modal -->


<div class="modal" id="modal-wsdl">

    <div class="modal-content">

        <ul class="collection z-depth-5" id="showWSDL">
            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['WSDL']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li class="collection-item dismissable" style="cursor: pointer;" id="ws_<?php echo $this->_tpl_vars['WSDL'][$this->_sections['LE']['index']][0]; ?>
"><div><span class="wsdls" id="wsid_<?php echo $this->_tpl_vars['WSDL'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['WSDL'][$this->_sections['LE']['index']][1]; ?>
</span><a class="secondary-content delws" id="delws<?php echo $this->_tpl_vars['WSDL'][$this->_sections['LE']['index']][0]; ?>
"><i class="material-icons">delete</i></a></div></li>
            <?php endfor; endif; ?>

        </ul>
        <a href='#modal-wsdl-bt' id="mantWsdl-bt" class="btn-floating right btn-medium waves-effect waves-light modal-trigger z-depth-2" data-position="top" data-tooltip="Ingresar Moneda"><i class="material-icons">add</i></a>


    </div>
    <br>

</div><!-- /.modal -->

<div class="modal bottom-sheet" id="modal-wsdl-bt">

    <div class="modal-content">
        <div class="add-wsdl" id="fwsdls">
            <label>Dirección URL del WSDL</label>
            <input type="text" id="vwsdlsnom" placeholder="http://" maxlength="255">
            <label>Peticion XML</label>
            <input type="text" id="vxmlsen" placeholder="SOAP" maxlength="255">
            <label>Respuesta XML</label>
            <input type="text" id="vxmlreq" placeholder="SOAP" maxlength="100">
            <label>Respuesta Array</label>
            <input type="text" id="vobtener" placeholder="VALOR_1,VALOR_2" maxlength="255">
            <label>Parámetros</label>
            <table>
                <th>Campo</th>
                <th>Valor</th>
                <tbody id="detallewsdl">
                    <tr id="fl0">
                        <td>
                            <input type="hidden" id="vidwsdl" value="?">
                            <input type="text" id="wsn1" class="constante" value="" placeholder="Nombre del Parámetro" maxlength="64"></td>
                            <td><input type="text" id="wsv1" value="" placeholder="Valor del Parámetro" maxlength="64"></td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large red" modulo="wsdl" detalle="1">
                      <i class="large material-icons">add</i>
                  </a>
              </div>
          </div>
      </div>

  </div><!-- /.modal -->

  <div class="modal modal-fixed-footer" id="modal-valorescat" style="width: 80%; height: 550px">

    <div class="modal-header">
        Valores en el Sistema - Categoría "<span id="cname-mod"></span>"
    </div>

    <div class="modal-content" id="fdetallenivelesclientes">
        <h3 class="center-align">Clientes</h3>
        <input type="hidden" id="viddetalle">
        <input type="hidden" id="vidnivel">
        <div class="row">
            <div class="input-field col s12 m6 l4">
                <a class="prefix">%</a>
                <input type="text" id="vclie_descuento_max" class="eder set0">
                <label for="vclie_descuento_max">Descuento Max.</label>
            </div>
            <div class="input-field col s12 m6 l4">
                <a class="prefix">%</a>
                <input type="text" id="vclie_descuento" class="eder set0">
                <label for="vclie_descuento">Descuento Base</label>
            </div>
            <div class="input-field col s12 m6 l4">
                <input type="text" id="vclie_plazo" class="eder set0">
                <label for="vclie_plazo">Plazo en Días</label>
            </div>
            <div class="input-field col s12 m6 l4">
                <input type="text" id="vclie_credito" class="eder set0">
                <label for="vclie_credito">Crédito</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <select id="vdcontado" type="select">
                    <option value="" disabled selected defecto="">Seleccione una Cuenta</option>
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
                <label for="vdcontado">Contado Debe</label>
            </div>
            <div class="input-field col s12 m6 l4">
                <select id="vhcontado" type="select" defecto="">
                    <option value="" disabled selected>Seleccione una Cuenta</option>
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
                <label for="vhcontado">Contado Haber</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <select id="vdcredito" type="select" defecto="">
                    <option value="" disabled selected>Seleccione una Cuenta</option>
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
                <label for="vdcredito">Crédito Debe</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <select id="vhcredito" type="select" defecto="">
                    <option value="" disabled selected>Seleccione una Cuenta</option>
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
                <label for="vhcredito">Crédito Haber</label>
            </div>
        </div>

        <h3 class="center-align">Productos</h3>

        <div class="row">

            <div class="input-field col s12 m6 l4">
                <a class="prefix">%</a>
                <input type="text" id="vprod_descuento_max" class="eder set0">
                <label for="vprod_descuento_max">Descuento Max.</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <input type="text" id="vprod_descuento" class="eder set0">
                <label for="vprod_descuento">Descuento Base</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <select id="vprod_cuenta" type="select" defecto="">
                    <option value="" disabled selected>Seleccione una Cuenta</option>
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
                <label for="vprod_cuenta">Cuenta Inventario</label>
            </div>
            <br>
        </div>
        <br>
    </div>

    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
        <button type="button" class="btn btn-primary edit" modulo="detallenivelescliente">Guardar</button>
    </div>

</div>