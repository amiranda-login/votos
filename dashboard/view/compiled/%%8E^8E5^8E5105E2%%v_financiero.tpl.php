<?php /* Smarty version 2.6.17, created on 2017-04-03 19:29:14
         compiled from v_financiero.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-financiero.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <br>
    <?php echo $this->_tpl_vars['NAV']; ?>

    <div class="bdy">
      <div class="card z-depth-5">
          <div class="card-header center  white-text" style="background-color:#0B3861 "><p class="flow-text">Área Financiera</p></div>
          <div class="card-content ">
            <div class="row">

              <div class="col s12 m12 l6">
                <div class="card z-depth-5">
                  <div class="card-title blue-grey white-text center ">&nbsp;Opciones</div>

                  <div class="card-panel ">

                    <div class="row">
                     <div class="col s12 m6 l6">
                      <a href="contabilidad" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Contabilidad
                      ">Contabilidad</a>
                    </div>
                    <div class="col s12 m6 l6">
                      <a href="presupuesto" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Presupuesto">Presupuesto</a>
                    </div>
                    <div class="col s12 m6 l6">
                      <a href="cuentas?tf=2" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Cuentas por Cobrar">Cuentas por Cobrar</a>
                    </div>
                    <div class="col s12 m6 l6">
                      <a href="cuentas?tf=1" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Cuentas por Pagar">Cuentas por Pagar</a>
                    </div>
                     <div class="col s12 m6 l6">
                      <a href="cuentas?tf=1" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Cuentas por Pagar">Notas de Crédito y debito</a>
                    </div>
                      <div class="col s12 m6 l6">
                      <a href="cuentas?tf=1" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Cuentas por Pagar">Devoluciones</a>
                    </div>
                    <div class="col s12 m6 l6">
                      <a href="reportes" class="waves-effect waves-light btn-large blue z-depth-3" style="margin-top:4%; width: 100%;" title="Clientes">Reportes</a>
                    </div>

                  </div>
                </div>

                
              </div>
            </div>

            <div class="col s12 m12 l6">
              <div class="card z-depth-5">
                <div class="card-title blue-grey white-text center">&nbsp;Gráfico</div>
                <div class="card-content">
                  <canvas class="charts" id="chartG1" width="100%" height="50"></canvas>
                </div>
              </div>
            </div>

          </div>
 
        </div>
      </div>
    </div>
    <script src="../assets/js/modulos/financiero.js"></script>
  </body>
</html>