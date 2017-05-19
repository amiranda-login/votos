<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title>Sistema de Votación</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/style-menu.css">

  </head>
    {$STY}
  <body>
    {$NAV}
    <div class="bdy">

    <div>

     <ul class="collection with-header">
        <li class="collection-header center"><h4>Votaciones en Curso</h4></li>
      </ul>
    <ul class="collapsible" data-collapsible="accordion">
    {section name=LE loop=$VOT}
      <li id="li{$VOT[LE][0]}">
        <div class="collapsible-header">{$VOT[LE][1]}<span class="new badge" data-badge-caption="votos" id="ajaxvotos">0</span><i class="material-icons">input</i></div>
        <div class="collapsible-body" id="v{$VOT[LE][0]}">
          <canvas class="charts" id="chartG1" width="100%" height="50"></canvas>
        </div>
      </li>
    {/section}
    </ul>

    </div>
    
    {$SCR}
    <script type="text/javascript" src="../assets/js/modulos/main.js"></script>
  </body>
</html>