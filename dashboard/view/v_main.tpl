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
      <li>
        <div class="collapsible-header">Cantidad de Votos: <span class="new badge">0</span><i class="material-icons">filter_drama</i>input</div>
        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
    {/section}
    </ul>

    </div>
    {$SCR}
  </body>
</html>