<?php /* Smarty version 2.6.17, created on 2017-04-06 07:38:25
         compiled from ajax/productos/ajaxmantServicios.tpl */ ?>
<div id="mantServ">
    <div class="row">
        <div class="col s12 m6">


           <div class="input-field col s2 m2 l1">

            <a class="dropdown-button btn-floating waves-effect waves-light blue z-depth-5" data-activates="fserv" ><i class="material-icons">search</i></a>

        </div>


        <div class="input-field col s9 m9">
            <input id="searchsrv" type="text" class="validate" style="margin-left: 1% !important;">
            <label for="searchsrv" id="phs" style="margin-left: 1% !important;">Buscar por Código</label>

        </div>
        <ul id="fserv" class="dropdown-content" filter="1">
            <li><a class="dropdown-item filtersrv" filtro="f1">Código</a></li>
            <li><a class="dropdown-item filtersrv" filtro="f2">Nombre</a></li>
        </ul>            
    </div>
    <div class="col s12 m6">
        <a id="addservice" class="btn-floating waves-effect waves-light right blue z-depth-5" href="#modal-servicios"><i class="material-icons">add</i></a>
    </div>
</div>

<div class="row">
    <div class="col s12 m12">
        <div class="table">
            <table class="table responsive-table centered striped bordered highlight z-depth-5" id="data-table-servicios" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Código</th>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Nombre</th>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Precio</th>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Período</th>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Outsourcing</th>
                        <th class="white-text blue" style="border: 0; border-radius: 0px !important;">Acciones</th>
                    </tr>
                </thead>
                <tbody id="listaservicios">
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['SERV']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td style="padding: 10px;"><?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][1]; ?>
</td>
                        <td style="padding: 10px;"><?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][2]; ?>
</td>
                        <td style="padding: 10px;"><?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][3]; ?>
</td>
                        <td style="padding: 10px;"><?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][4]; ?>
</td>
                        <td style="padding: 10px;"><?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][5]; ?>
</td>
                        <td style="padding: 10px;">
                            <a class="btn-color pbtn loadserv" id="m<?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][0]; ?>
" href="#modal-servicios" title="Editar Servicio"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn-color pbtn cdel delete" modulo="servicio" id="d<?php echo $this->_tpl_vars['SERV'][$this->_sections['LE']['index']][0]; ?>
" title="Eliminar Producto"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endfor; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><br><br>
<div id="modal-servicios" class="modal modal-fixed-footer" style="width:70%;height:90%">
    <div class="modal-header">
        <ul class="tabs blue">
            <li class="tab col s3"><a class="white-text menuS active" id="ms1" href="#">Datos Servicio</a></li>
            <li class="tab col s3"><a class="white-text menuS" id="ms2" href="#">Financiero</a></li>
        </ul>
    </div>
    <div class="modal-content" style="padding: 0px;">
        <form id="fservicios">
            <div id="datosservicios" style="padding: 25px 10px 0 10px">
                <input type="hidden" id="vidmoneda" value="1">
                <input type="hidden" id="vid" value="0">
                <input type="hidden" id="vidproveedor" value="0">
                <input type="hidden" id="vidusuario" value="">
                <div class="row">
                    <div class="input-field col s12 m6 l6" style="margin: 0">
                        <input id="vcodigo" type="text" class="validate">
                        <label for="vcodigo">Código de Servicio</label>
                    </div>
                    <div class="input-field col s12  m6 l6" style="margin: 0">
                        <input id="vnombre" type="text" class="validate">
                        <label for="vnombre">Nombre de Servicio</label>
                    </div>
                    <div class="input-field col s12 " style="margin: 0">
                        <textarea id="vdescripcion" type="textarea" class="materialize-textarea" length="150" style="margin: 0"></textarea>
                        <label for="vdescripcion">Descripción del Servicio</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="row" style="margin: 0">
                            <div class="col s12 m12 l3">
                                <input type="checkbox" id="isPeriodo" value="0">
                                <label for="isPeriodo">Por Periodo</label>

                                <input type="hidden" id="vperiodo" value="0">
                            </div>

                            <div class="col s6 l2 opPeriodo">
                                <br>
                                <input type="radio" class="with-gap cper" id="diario" valor="1" name="speriodo" disabled>
                                <label for="diario">Diario</label>
                            </div>
                            <div class="col s6 l2 opPeriodo">
                                <br>
                                <input type="radio" class="with-gap cper" id="mensual" valor="2" name="speriodo" disabled>
                                <label for="mensual">Mensual</label>
                            </div>
                            <div class="col s6 l2 opPeriodo">
                                <br>
                                <input type="radio" class="with-gap cper" id="anual" valor="3" name="speriodo" disabled>
                                <label for="anual">Anual</label>
                            </div>
                            <div class="col s6 l2 opPeriodo" id="dotros">
                                <br>
                                <input type="radio" class="with-gap cper" id="otros" valor="4" name="speriodo" disabled>
                                <label for="otros">Otros:</label>
                                <input type="hidden" id="botro" value="0">
                            </div>
                            <div class="input-field col s6 m3 hide" id="dhotro">
                                <input id="vdias" type="number" class="validate" min="1" value="0">
                                <label for="vdias">Período en Días</label>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col s12 m3">
                        <input type="checkbox" id="outsourcing" value="0">
                        <label for="outsourcing">Outsourcing</label>
                        <input type="hidden" id="boutsrc" value="0">
                    </div>
                    <!-- </div> -->
                    <!-- <div class="row"> -->
                    <div class="input-field col s12 m12 ">
                        <select id="prov" disabled>
                            <br><option value="0" disabled selected>Seleccione un Proveedor</option>
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
                            <option value="<?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][0]; ?>
"><?php echo $this->_tpl_vars['CLI'][$this->_sections['LE']['index']][1]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="prefix" href="#hextra"><i class="material-icons pbtn">help</i></a>
                        <input type="text" id="vextra">
                        <label for="vextra">Extra Automática del Nombre</label>
                    </div>
                </div>
            </div>
            <div id="financiero" class="hide" style="padding: 25px 10px 0 10px">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">¢</i>
                        <input id="vpbase" type="number" class="validate vcalcserv" min="1" num="1">
                        <label for="vpbase">Precio Base</label>

                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">%</i>
                        <input id="vpganancia" type="number" class="validate vcalcserv" min="1" value="0.00" num="2">
                        <label for="vganancia">Ganancia</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">¢</i>
                        <input id="vprecio" type="number" class="validate vcalcserv" num="3">
                        <label for="vprecio">Precio Total</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a class="modal-action waves-effect waves-light btn-flat blue white-text add" id="addserv" modulo="servicio">Agregar</a>
        <a class="modal-action modal-close waves-effect waves-light btn-flat grey lighten-1 white-text">Salir</a>
    </div>
</div>

<div id="hextra" class="modal">
    <div class="modal-content">
      <h4>Extra en el Nombre del Servicio</h4>
      <p>Se Utiliza para asignar variables cuando el servicio es Facturado</p>
      <br>
      <ul>
          <li><b>%HOY%</b>, Despliega la Fecha del Día en Formato dd-mm-yyyy</li>
          <li><b>%ANO%</b></li>  
          <li><b>%MES%</b></li>
          <li><b>%DIA%</b></li>

      </ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
    </div>
  </div>