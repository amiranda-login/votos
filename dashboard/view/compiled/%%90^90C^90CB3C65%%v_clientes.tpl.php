<?php /* Smarty version 2.6.17, created on 2017-04-03 19:07:38
         compiled from v_clientes.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Clientes</title>
</head>
<!-- #0B3861 -->
<body>
    <?php echo $this->_tpl_vars['NAV']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-clientes.css">
    <div class="bdy">
        <div class="card z-depth-5">

        <div class="card-header center white-text" style="background-color:#0B3861">
                <p class="flow-text" style="font-size: 1.9em;">Clientes</p>
            </div>
            <div class="card-content">
                <div class="row">

                    <div class="input-field col s10 m6 l6">

                        <a class="prefix dropdown-button tooltipped "  data-activates='filtr_1' data-position="button" data-tooltip="Cambiar Filtro"><i class="small material-icons">search</i></a>
                        <ul id='filtr_1' class='dropdown-content'>
                            <li><a href="#!" fltr="1">Nombre</a></li>
                            <li><a href="#!" fltr="2">Cédula</a></li>
                            <li><a href="#!" fltr="3">Teléfono</a></li>
                        </ul>
                        <input type="text" id="search_clientes" maxlength="100" num="v29" var="nombre">
                        <label class="truncate" for="search_clientes">Buscar Cliente por Nombre o Cédula</label>

                    </div>
                    <div class="col s2 m6">
                        <a id="ingClie" class="der btn-floating tooltipped modal-trigger z-depth-5" data-position="left" data-tooltip="Ingresar Cliente" href="#modal-clientes"><i class="large material-icons ">add</i></a>
                    </div>

                </div>

                <div class="card-block">

                    <table  class="table centered highlight bordered responsive-table z-depth-3" id="data-table-clientes">
                        <thead>
                            <tr>
                                <th class="sinborde white-text blue" ><b>Cédula</b></th>
                                <th class="sinborde white-text blue" >Nombre</th>
                                <th class="sinborde white-text blue" >Teléfonos</th>
                                <th class="sinborde white-text blue" >Correo</th>
                                <th class="sinborde white-text blue" >Tipo</th>
                                <th class="sinborde white-text blue" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="listaclientes">
                            <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['CLIE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <tr id="f<?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][0]; ?>
">
                                <td style=" padding: 10px;"><?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][1]; ?>
</td>
                                <td style=" padding: 10px;"><?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][2]; ?>
</td>
                                <td style=" padding: 10px;"><?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][4]; ?>
</td>
                                <td style=" padding: 10px;"><?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][5]; ?>
</td>
                                <td style=" padding: 10px;"><?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][6]; ?>
</td>
                                <td>
                                    <a href="#modal-clientes" class="load material-icons pbtn" id="m<?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][0]; ?>
" modulo="cliente" style="font-size: 2em; color: #607d8b">edit</a>
                                    <a href="#" class="delete material-icons pbtn" modulo="cliente" id="d<?php echo $this->_tpl_vars['CLIE'][$this->_sections['LE']['index']][0]; ?>
" style="font-size: 2em; color: #607d8b">delete</a>
                                </td>
                            </tr>
                            <?php endfor; endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="modal modal-fixed-footer" id="modal-clientes" style="height: 80%; width: 75%">

                    <div class="modal-header">
                        <ul class="tabs tabs-fixed-width blue">
                            <li class="tab col s3"><a class="active white-text" href="#info" id="ln1">Información</a></li>
                            <li class="tab col s3"><a href="#fina" class="white-text" id="ln2">Financiero</a></li>
                            <li class="tab col s3"><a href="#logis" class="white-text" id="ln3">Logística</a></li>
                            <li class="tab col s3"><a href="#exo" class="white-text" id="ln4">Impuestos</a></li>
                        </ul>
                    </div>

                    <div class="modal-content" style="padding: 0px;">
                        <div id="fclientes">
                            <input type="hidden" id="zelda">
                            <div class="row">
                                <br>
                                <div class="col s12 m12 l12">
                                    <div class="row parte1 col s12" id="info">
                                        <div class="row" style="margin: 0px">
                                            <div class="col s6 m3 l2">
                                                <p>
                                                  <input class="with-gap" name="tipoclie" type="radio" id="cfisico" tipoClie="1" checked="checked" principal="1"/>
                                                  <label for="cfisico">Físico</label>
                                              </p>
                                          </div>
                                          <div class="col s6 m3 l2">
                                            <p>
                                              <input class="with-gap" name="tipoclie" type="radio" id="cjuridico" tipoClie="2" />
                                              <label for="cjuridico">Jurídico</label>
                                          </p>
                                      </div>
                                      <div class="col s6 m3 l2">
                                        <p>
                                          <input class="with-gap" name="tipoclie" type="radio" id="cnite" tipoClie="3" />
                                          <label for="cnite">NITE</label>
                                      </p>
                                  </div>
                                  <div class="col s6 m3 l2">
                                    <p>
                                      <input class="with-gap" name="tipoclie" type="radio" id="cdimex" tipoClie="4" />
                                      <label for="cdimex">DIMEX</label>
                                  </p>
                              </div>
                              <input type="hidden" id="vidtipocliente" value="1">
                          </div>
                          <br>
                          <div class="card-title" id="titInfo" align="center"><b>Datos Personales</b></div>

                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                <label id="nomClie" for="vnombre">Nombre</label>
                                <input type="text" class="validate" id="vnombre">
                                <input type="hidden" id="vid" value="0">
                                <input type="hidden" id="vbisproveedor" value="0">
                            </div>

                            <div class="input-field col s12 m6 col l4 hid">
                                <label for="vapellido1">Primer Apellido</label>
                                <input type="text" class="form-control" id="vapellido1">
                            </div>

                            <div class="input-field col s12 m6 l4 hid">
                                <label for="vapellido2">Segundo Apellido</label>
                                <input type="text" class="form-control" id="vapellido2">
                            </div>
                            
                            <div class="input-field col s12 m6 l4">
                                <label for="vcedula">Cédula del Cliente</label>
                                <input type="text" class="validate" id="vcedula" data-mask="9-9999-9999">
                            </div>

                            <div class="input-field col s12 m6 col l4">
                                <label for="vweb">Web</label>
                                <input type="text" class="form-control" id="vweb" placeholder="www.webempresa.com">
                            </div>

                            <div class="input-field col s12 m6 l4">
                                <select id="videstado" type="select">
                                    <option value="" disabled selected>Seleccione un Estado</option>
                                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['ESTCLIE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option value="<?php echo $this->_tpl_vars['ESTCLIE'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['ESTCLIE'][$this->_sections['LE']['index']][1]; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                <label for="videstado">Estado</label>
                            </div>
                            

                            <div class="input-field col s12 m12 l4 ciclos" vtabla="correo" id="fcorreos" hasTabla="1" tp="3">
                                <div class="ciclos">
                                    <div class="prefix"><i class="material-icons">email</i></div>
                                    <input type="email" class="validate tooltipped" id="correo_in" data-position="top" data-tooltip="Ingresar Correo con la Tecla [right]">
                                    <input type="hidden" id="vcorreo" fill="18">
                                    <label for="correo_in">Ingresar Correo</label>
                                    <ul class="collection" id="shcorreos"></ul>
                                </div>
                            </div>
                            
                            <div class="col s12 m12 l8 ciclos" vtabla="telefono" id="ftelefonos" hasTabla="1" tp="3">
                                <div class="ciclos">
                                    <div class="row">

                                        <div class="input-field col s12 m6">
                                            <select type="select" id="tptel">
                                                <option value="" disabled selected>Seleccione Tipo de Tel.</option>
                                                <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['TPTEL']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                <option value="<?php echo $this->_tpl_vars['TPTEL'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['TPTEL'][$this->_sections['LE']['index']][1]; ?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                            <label for="tptel">Tipo Teléfono</label>
                                        </div>

                                        <div class="input-field col s12 m6">
                                            <div class="prefix"><i class="fa fa-phone"></i></div>
                                            <input type="text" class="validate tooltipped" id="telefono_in" data-mask="9999-9999" data-position="top" data-tooltip="Ingresar Teléfono con la Tecla [right]">
                                            <input type="hidden" id="vtelefono" fill="19">
                                            <label class="truncate" for="telefono_in">Ingresar Teléfono</label>
                                            
                                            <ul class="collection" id="shtelefonos"></ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="fina" class="col s12">
                        <div class="row"><br>
                            <div class="input-field col s12 m6 l6">
                                <select type="select" id="vidnivel">
                                    <option value="0">Seleccione una Categoría</option>
                                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['NVLCLIE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option value="<?php echo $this->_tpl_vars['NVLCLIE'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['NVLCLIE'][$this->_sections['LE']['index']][1]; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                <label for="vidnivel">Categoría del Cliente</label>
                            </div>

                            <div class="col s12 m6 l6">

                              <div class="switch" align="center">
                                <label>
                                   Contado
                                  <input type="checkbox" tp="1" id="tipocliente">
                                  <span class="lever"></span>
                                   Crédito
                              </label>
                          </div>

                      </div>
                  </div> 

                  <div class="row">

                    <div class="input-field col s12 m6 l6">
                        <div class="prefix"><img src="../assets/img/icon/percent.svg"></div>
                        <input type="number" class="eder center" id="vdescuentom">
                        <label for="vdescuentom">Descuento Máximo</label>
                    </div>

                </div>

                <div class="row cre" style="display: none;"> 

                    <div class="input-field col s12 m6 l6">
                        <div class="prefix"><i class="material-icons">today</i></div>
                        <label for="vplazo">Plazo en Días</label>
                        <input type="number" class="eder" id="vplazo">
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <div class="prefix"><i class="material-icons">money_off</i></div>
                        <label for="vcredito">Crédito del Cliente</label>
                        <input type="number" class="eder" id="vcredito">
                    </div>

                </div>



                <div vtabla="defectocuenta" id="fdefectocuentas" hasTabla="1" tp="3">
                    <div class="ciclos">
                        <input type="hidden" id="videstadocontable" value="1">
                        <input type="hidden" id="vidcuenta" value="">

                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card-title"><b> Cuentas Contado </b></div>
                                
                                <div id="ctacontado">

                                </div>
                            </div>

                            <div class="col s6 cre" style="display: none;">
                                <div class="card-title"><b> Cuentas Crédito </b></div>
                                <div id="ctacredito">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="logis" class="col s12">
                <div class="row">

                    <div vtabla="ubicacione" id="fubicaciones" hasTabla="1" tp="3" class="ciclos">
                        <div class="ciclos">
                            <div class="card-title" align="center"><b>Direcciones</b></div>

                            <input type="hidden" id="vbisnacional" value="1">

                            <div class="row"><br>
                                <div class="input-field col s12 m12 l4">
                                 <br>
                                 <div class="provincia">
                                    <a class="prefix btn-floating blue tooltipped" data-position="button" data-tooltip="Ingresar Provincia" href="#!" style="width: 2.5rem" det="provincia" d-b="8" prev="" sig="vidcanton"><i class="material-icons">add</i></a>

                                    <select id="vidprovincia" type="select" class="_det" primary="1">
                                        <option value="0">Seleccione una Provincia</option>
                                        <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['PRO']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <option value="<?php echo $this->_tpl_vars['PRO'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['PRO'][$this->_sections['LE']['index']][1]; ?>
</option>
                                        <?php endfor; endif; ?>
                                    </select>
                                    <label for="vidprovincia">Provincia</label>
                                </div>

                            </div>

                            <div class="input-field col s12 m12 l4">
                             <br>
                             <div class="canton">

                                <a class="prefix btn-floating blue tooltipped" data-position="button" data-tooltip="Ingresar Cantón" href="#!" style="width: 2.5rem" det="canton" d-b="9" prev="vidprovincia" sig="viddistrito"><i class="material-icons">add</i></a>


                                <select id="vidcanton" type="select" class="_det">
                                    <option value="">Seleccione un Cantón</option>
                                </select>
                                <label for="vidcanton">Cantón</label>
                            </div>

                        </div>

                        <div class="input-field col s12 m12 l4">
                         <br>
                         <div class="distrito">
                            <a class="prefix btn-floating blue tooltipped" data-position="button" data-tooltip="Ingresar Distrito" href="#!" style="width: 2.5rem" det="distrito" d-b="10" prev="vidcanton" sig=""><i class="material-icons">add</i></a>

                            <select id="viddistrito" type="select" class="_det">
                                <option value="">Seleccione un Distrito</option>
                            </select>
                            <label for="viddistrito">Distrito</label>
                        </div>

                    </div>
                    <div class="input-field col s12 m12 l6">
                        <br>
                        <label for="vdireccion">Dirección Exacta</label>
                        <textarea type="textarea" id="vdireccion" class="materialize-textarea" length="100"></textarea>
                    </div>

                </div>

                <div class="row">



                    <div class="input-field col s12 hide-on-med-and-up">
                        <div class="prefix"><i class="material-icons">location_on</i></div>
                        <label for="vlatitud">Latitud</label>
                        <input type="text" class="eder" id="vlatitud">
                    </div>
                    
                    <div class="input-field col s12 hide-on-med-and-up">
                        <div class="prefix"><i class="material-icons">location_on</i></div>
                        <label for="vlongitud">Longitud</label>
                        <input type="text" class="eder" id="vlongitud">
                    </div>

                </div>
            </div>    
        </div>
    </div>
</div>  

<div id="exo" class="col s12">
    <div class="row">

        <div class="card-title" align="center"><b>Impuestos</b></div>

        
        <div class="input-field col s12 m12 l6">
            <select id="sel_impuestos" type="select">
                <option value="" disabled selected>Ingrese un Impuesto</option>
                <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['IMP']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <option value="<?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][0]; ?>
" tmp="<?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][2]; ?>
"><?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][1]; ?>
 - <?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][3]; ?>
%</option>
                <?php endfor; endif; ?>
            </select>
            
        </div>
        <div class="col s12 m12 l6">

            <div>
                <ul class="collection" id="showimpuestos">

                </ul>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</div>
</div>

<div class="modal-footer">

    <button type="button" class="modal-action modal-close waves-effect waves-red btn-flat">Salir</button>
    <button type="button" class="waves-effect waves-green btn-flat add" id="agClie" codigo="1" modulo="cliente" varias="1" >Guardar</button>
</div>

</div>

</div>
</div>
</div>

<script src="../assets/js/modulos/clientes.js?v=1.1"></script>

</body>
</html>