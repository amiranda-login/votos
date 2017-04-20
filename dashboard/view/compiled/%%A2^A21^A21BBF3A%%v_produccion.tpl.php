<?php /* Smarty version 2.6.17, created on 2017-04-17 22:36:59
         compiled from v_produccion.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Producción</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-produccion.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php echo $this->_tpl_vars['NAV']; ?>

<div class="bdy">

    <div class="card-header  white-text z-depth-5" style="background-color:#0B3861">
        <p class="flow-text center-align">Producción</p>
    </div>
    <nav class="navbar navbar-dark blue z-depth-5">
        <ul class="nav navbar-nav">
            <li class="nav-item menu active" id="m1">
                <a class="nav-link" href="#" title="Recetas">Procesos</a>
            </li>
            <li class="nav-item menu" id="m2">
                <a class="nav-link" href="#" title="Linea Producción">Linea Producción</a>
            </li>
            <li class="nav-item menu" id="m3">
                <a class="nav-link" href="#" title="Inicio Produccion">Inicio Produccion</a>
            </li>
            <li class="nav-item menu" id="m4">
                <a class="nav-link" href="#" title="Seguimiento">Seguimiento</a>
            </li>
        </ul>
    </nav>
    <div class="card z-depth-5" id="mantproduccion"></div>
    <div id="modal-addtoproducts" class="modal modal-fixed-footer" style="width:70%;height:90%">
        <div class="modal-header">
            <div class="card-header center white-text" style="background-color:#0B3861">
                <p class="flow-text marginzero">Agregar Receta a Inventario de <?php echo $this->_tpl_vars['DEF']; ?>
</p>
            </div>
        </div>
        <div class="modal-content">
            <div class="modal-bdy row">
                <div id="alrdyisprdct" class=" center">
                    <span id="isinprod">Esta receta ha sido agregada anteriormente a productos</span>
                </div>
                <div id="noisprdct">
                    <div class="input-field col s12 m12 l6">
                        <div class="familia">
                            <a class="prefix btn-floating blue btn-small tooltipped z-depth-5" data-position="button" data-tooltip="Ingresar Familia" style="width: 2.5rem" det="familia" d-b="20" prev="" sig="vidtipo"><i class="fa fa-plus"></i></a>

                            <select type="select" id="vidfamilia" class="_det" primary="1">
                                <option value="0">Seleccione una Familia</option>
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
                            <label for="vidfamilia">Familia</label>
                        </div>
                        <div class="input-field">
                            <div class="tipo">
                                <a class="prefix btn-floating blue btn-small tooltipped z-depth-5" data-position="button" data-tooltip="Ingresar Tipo" style="width: 2.5rem" det="tipo" d-b="21" prev="vidfamilia" sig="vidmarca"><i class="fa fa-plus"></i></a>
                                <select type="select" id="vidtipo" class="_det">
                                <option value="0">Seleccione un Tipo</option>
                                </select>
                                <label for="vidtipo">Tipo</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="marca">
                                <a class="prefix btn-floating blue btn-small tooltipped z-depth-5" data-position="button" data-tooltip="Ingresar Marca" style="width: 2.5rem" det="marca" d-b="22" prev="vidtipo" sig=""><i class="fa fa-plus"></i></a>
                                <select type="select" id="vidmarca" class="_det">
                                <option value="0">Seleccione un Marca</option>
                                </select>
                                <label for="vidmarca">Marca</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="vminimo" type="number" class="validate">
                        <label for="vminimo">Minimo en Inventario</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="vmaximo" type="number" class="validate">
                        <label for="vmaximo">Maximo en Inventario</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="vmaxdesc" type="number" class="validate">
                        <label for="vmaxdesc">Descuento Máximo</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="vganancia" type="number" class="validate">
                        <label for="vganancia">Ganancia</label>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close waves-effect waves-light btn-flat white-text blue z-depth-5" id="savetoprod">Agregar</a>
            <a class="modal-action modal-close waves-effect waves-light btn-flat white-text grey lighten-1 z-depth-5" style="margin-right: 2%;">Salir</a>
        </div>
    </div>
</div>

<script src="../assets/js/modulos/produccion.js?v=0.14"></script>
</body>
</html>