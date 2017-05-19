<?php /* Smarty version 2.6.17, created on 2017-05-19 01:28:06
         compiled from ../view/menuSmarty.php */ ?>
<ul id="slide" class="side-nav blue-text text-darken-2 " style="max-width: 400px !important;">
    <li>
      <div class="userView">
        <div class="background">
          <img src="../assets/img/bckground.jpg">
        </div>
        <a href="#!user" class="center"><i class="medium material-icons" style="color:#fff" aria-hidden="true">person_pin</i></a>
        <div class="input-field col s12 white-text">
          <label><?php echo $_SESSION['NOM']; ?>
</label>
        </div>
        <a href="#!name" class="center"><span class="white-text name"></span></a>
        <a href="#!email" class="center"><span class="white-text email"><?php echo $_SESSION['MAIL']; ?>
</span></a>
      </div>
    </li>

    <li><a href="main"><i class="material-icons right" aria-hidden="true" style="color: #000000 ">check</i><b>Votar</b></a></li>
    <li><a href="ajustes"><i class="material-icons right" aria-hidden="true" style="color: #000000">store</i><b>Configuración</b></a></li>
    <li><a href="usuarios"><i class="material-icons right" aria-hidden="true" style="color: #000000">credit_card</i><b>Usuarios</b></a></li>
     <li><a href="reportes"><i class="material-icons right" aria-hidden="true" style="color: #000000 ">business</i><b>Reportes</b></a></li>
    <li><a href="logout"><i class="material-icons right" aria-hidden="true" style="color: #000000">flight_takeoff</i><b>Cerrar Sesión</b></a></li>
  </ul>
  <!-- menu pequeño -->
<ul id="out" class="side-nav" style="max-width: 400px !important;">
    <li>
      <div class="userView">
        <div class="background">
          <img src="../assets/img/bckground.jpg">
        </div>
        <a href="#!user" class="center"><i class="medium material-icons" style="color:#fff" aria-hidden="true">person_pin</i></a>
        <div class="input-field col s12 white-text">
          <select id="lgt">
            <option value="0" class="logout" id="x1" disabled selected><?php echo $_SESSION['NOM']; ?>
</option>
            <option value="1" class="logout" id="x2">Cerrar Sesion</option>
          </select>
        </div>
        <a href="#!name" class="center"><span class="white-text name"></span></a>
        <a href="#!email" class="center"><span class="white-text email"><?php echo $_SESSION['MAIL']; ?>
</span></a>
      </div>
    </li>
    
    <li><a href="main"><i class="material-icons right" aria-hidden="true" style="color: #000000 ">check</i><b>Votar</b></a></li>
    <li><a href="ajustes"><i class="material-icons right" aria-hidden="true" style="color: #000000">store</i><b>Configuración</b></a></li>
    <li><a href="usuarios"><i class="material-icons right" aria-hidden="true" style="color: #000000">credit_card</i><b>Usuarios</b></a></li>
    <li><a href="reportes"><i class="material-icons right" aria-hidden="true" style="color: #000000 ">business</i><b>Reportes</b></a></li>
    <li><a href="logout"><i class="material-icons right" aria-hidden="true" style="color: #000000">flight_takeoff</i><b>Cerrar Sesión</b></a></li>
  </ul>
  <!-- fin -->
  <div class="navbar-fixed hide-on-large-only">
  <nav>
   <div class="nav-wrapper blue-grey darken-2">
      <a href="#" data-activates="out" class="button-collapse"><i class="samll material-icons">menu</i></a>
      </div>
      </nav>
      </div>

  <a style="background-color:#0B3861 " href="#" data-activates="slide" class="hide-on-med-and-down button-collapse  z-depth-5 menu-btn" ><p class="white-text menu-txt" >MENU</p></a>
  <!-- hide-on-med-and-down  -->