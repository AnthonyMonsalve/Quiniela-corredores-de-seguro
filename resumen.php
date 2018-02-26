<?php 
   require_once('includes/head.php');
?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php    require_once('includes/header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php    require_once('includes/aside.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">¡Bienvenido Anthony!</h3>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="#" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Empezar a Jugar</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <!-- <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Sales Overview</h3>
                                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6> </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Ample</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Pixel</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">Our Visitors </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Mobile</h6> </li>
                                    <li>
                                        <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Desktop</h6> </li>
                                    <li>
                                        <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Tablet</h6> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-6">
                        <div class="card">
                            <div class="card-block bg-info">
                                <img class="m-b-10" src="assets/images/sistema-puntos.fw.png" alt="Sistema de Puntos">
                                <h4 class="card-subtitle text-white m-b-0 op-5">¿Cuáles son las reglas y cómo obtengo puntos?</h4>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    
                                    <!-- <div class="text-center"><img src="assets/images/pelota.fw.png" class="cup-mejores-puntajes segundo" width="45" alt=""></div>
                                    <div class="text-center"><img src="assets/images/pelota.fw.png" class="cup-mejores-puntajes tercero" width="45" alt=""></div> -->
                                    <div class="message-widget contact-widget">
                                            <div class="cup-mejores-puntajes">
                                                <div class="sistema-puntos">
                                                    <p class="text-black">Cada participante deberá predecir el resultado de cada partido del <strong>Mundial Rusia 2018</strong>. Cuando un partido finaliza, se compara el resultado con la predicción de cada participante y se otorgan los puntos de la siguiente manera:</p>
                                                </div>
                                            </div>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="flex">
                                                <div style="margin-right: 15px;">
                                                    <img src="assets/images/3puntos.fw.png" alt="">
                                                </div>
                                                <div>
                                                    <span class="text-black">
                                                        Si la predicción concuerda exactamente con el resultado del partido. <br> (Ejemplo. Predicción 2-2, Resultado 2-2).
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="flex">
                                                <div style="margin-right: 15px;">
                                                    <img src="assets/images/1puntos.fw.png" alt="">
                                                </div>
                                                <div>
                                                    <span class="text-black">
                                                        Si la predicción concuerda con el resultado del partido pero no así los goles. <br> (Ejemplo. Predicción 2-1, Resultado 1-0)
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="flex">
                                                <div style="margin-right: 15px;">
                                                    <img src="assets/images/0puntos.fw.png" alt="">
                                                </div>
                                                <div>
                                                    <span class="text-black">
                                                        Si la predicción no concuerda con el resultado del partido. <br> (Ejemplo. Predicción 3-2, Resultado 1-1).
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                       
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-block bg-info">
                                <img class="m-b-10" src="assets/images/mejores-puntajes.fw.png" alt="Mejores Puntajes">
                                <h4 class="card-subtitle text-white m-b-0 op-5">Ranking de usuarios participantes</h4>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    
                                    <!-- <div class="text-center"><img src="assets/images/pelota.fw.png" class="cup-mejores-puntajes segundo" width="45" alt=""></div>
                                    <div class="text-center"><img src="assets/images/pelota.fw.png" class="cup-mejores-puntajes tercero" width="45" alt=""></div> -->
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="cup-mejores-puntajes">
                                                <div class="flex">
                                                    <div class="user-img">
                                                        <img src="assets/images/users/1.jpg" alt="user" class="img-circle">
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Anthony Monsalve</h5> 
                                                    </div>
                                                </div>
                                                <img src="assets/images/pelota.fw.png" width="45" alt="">
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="cup-mejores-puntajes">
                                                <div class="flex">
                                                    <div class="user-img">
                                                        <img src="assets/images/users/2.jpg" alt="user" class="img-circle">
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Daniela Hernandez</h5> 
                                                    </div>
                                                </div>
                                                <img src="assets/images/pelota2.fw.png" width="45" alt="">
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="cup-mejores-puntajes">
                                                <div class="flex">
                                                    <div class="user-img">
                                                        <img src="assets/images/users/3.jpg" alt="user" class="img-circle">
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Pavan kumar</h5> 
                                                    </div>
                                                </div>
                                                <img src="assets/images/pelota3.fw.png" width="45" alt="">
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="ranking.php">
                                            <div>
                                                <span>Tabla de Clasificación</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                       
                    </div>
                    <div class="col-lg-6 m-b-100">
                        <div class="card">
                            <div class="card-block bg-info">
                                <img src="assets/images/proximos-encuentros.fw.png" alt="">
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    
                                    <!-- <div class="text-center"><img src="assets/images/pelota.fw.png" class="cup-mejores-puntajes segundo" width="45" alt=""></div>
                                    <div class="text-center"><img src="assets/images/pelota.fw.png" class="cup-mejores-puntajes tercero" width="45" alt=""></div> -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <h2 class="header-month tit-level-2 m-b-10"><strong> Junio 2018</strong></h2>
                                                            <table class="calendario-dias">
                                                                <caption>Calendario del Mundial de Rusia 2018 de fútbol</caption>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="day">
                                                                            <div class="date">14<span class="weekday-mobile">Jueves</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-a">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo A </p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Rusia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/rusia.svg" alt="Rusia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Rusia">Rus</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Arabia Saudí">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/arabia-saudita.svg" alt="Arabia Saudí">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Arabia Saudita">SAU</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">15<span class="weekday-mobile">Viernes</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-a">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo A</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Egipto">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/egipto.svg" alt="Egipto">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Egipto">EGI</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Uruguay">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/uruguay.svg" alt="Uruguay">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Uruguay">URU</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-b">
                                                                                <time class="hora">17:00<abbr class="time-zone" title="Central European Time">CET</abbr></time>
                                                                                <p class="grupo">Grupo B</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Marruecos">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/marruecos.svg" alt="Marruecos">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Marruecos">MAR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Irán">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/iran.svg" alt="Irán">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Irán">IRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-b">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo B</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Portugal">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/portugal.svg" alt="Portugal">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Portugal">POR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="España">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/espana.svg" alt="España">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="España">ESP</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td class="day">
                                                                            <div class="date">16<span class="weekday-mobile">Sábado</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-c">
                                                                                <time class="hora">12:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo C</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Francia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/francia.svg" alt="Francia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Francia">FRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Australia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/australia.svg" alt="Australia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Australia">AUS</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-d">
                                                                                <time class="hora">15:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo D</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href=" #" title="Argentina">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/argentina.svg" alt="Argentina">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Argentina">ARG</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Islandia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/islandia.svg" alt="Islandia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Islandia">ISL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-c">
                                                                                <time class="hora">18:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo C</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Perú">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/peru.svg" alt="Perú">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Perú">PER</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Dinamarca">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/dinamarca.svg" alt="Dinamarca">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Dinamarca">DIN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-d">
                                                                                <time class="hora">21:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo D</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Croacia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/croacia.svg" alt="Croacia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Croacia">CRO</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Nigeria">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/nigeria.svg" alt="Nigeria">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Nigeria">NIG</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">17<span class="weekday-mobile">Domingo</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-e">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo E</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Costa Rica">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/costa-rica.svg" alt="Costa Rica">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Costa Rica">COS</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Serbia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/serbia.svg" alt="Serbia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Serbia">SER</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-f">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo F</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Alemania">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/alemania.svg" alt="Alemania">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Alemania">ALE</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="México">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/mexico.svg" alt="México">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="México">MEX</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-e">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo E</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Brasil">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/brasil.svg" alt="Brasil">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Brasil">BRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Suiza">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/suiza.svg" alt="Suiza">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Suiza">SUI</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day">
                                                                            <div class="date">18<span class="weekday-mobile">Lunes</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-f">
                                                                                <time class="hora">15:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo F</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Suecia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/suecia.svg" alt="Suecia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Suecia">SUE</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Corea del Sur">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/corea-del-sur.svg" alt="Corea del Sur">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Corea del Sur">COR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-g">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo G</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Bélgica">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/belgica.svg" alt="Bélgica">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Bélgica">BEl</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Panamá">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/panama.svg" alt="Panamá">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Panamá">PAN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-g">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo G</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Túnez">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/tunez.svg" alt="Túnez">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Túnez">TUN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Inglaterra">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/inglaterra.svg" alt="Inglaterra">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Inglaterra">ING</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">19<span class="weekday-mobile">Martes</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-h">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo H</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Polonia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/republica-de-polonia.svg" alt="Polonia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Polonia">POL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Senegal">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/senegal.svg" alt="Senegal">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Senegal">SEN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-h">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo H</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href=" #" title="Colombia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/colombia.svg" alt="Colombia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Colombia">COL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Japón">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/japon.svg" alt="Japón">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Japón">JAP</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-a">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo A</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Rusia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/rusia.svg" alt="Rusia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Rusia">Rus</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Egipto">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/egipto.svg" alt="Egipto">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Egipto">EGI</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">20<span class="weekday-mobile">Miércoles</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-b">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo B</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Portugal">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/portugal.svg" alt="Portugal">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Portugal">POR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Marruecos">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/marruecos.svg" alt="Marruecos">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Marruecos">MAR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-a">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo A</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Uruguay">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/uruguay.svg" alt="Uruguay">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Uruguay">URU</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Arabia Saudí">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/arabia-saudita.svg" alt="Arabia Saudí">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Arabia Saudita">SAU</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-b">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo B</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Irán">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/iran.svg" alt="Irán">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Irán">IRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="España">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/espana.svg" alt="España">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="España">ESP</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">21<span class="weekday-mobile">Jueves</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-c">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo C</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Francia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/francia.svg" alt="Francia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Francia">FRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Perú">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/peru.svg" alt="Perú">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Perú">PER</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-c">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo C</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Dinamarca">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/dinamarca.svg" alt="Dinamarca">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Dinamarca">DIN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Australia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/australia.svg" alt="Australia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Australia">AUS</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-d">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo D</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href=" #" title="Argentina">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/argentina.svg" alt="Argentina">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Argentina">ARG</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Croacia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/croacia.svg" alt="Croacia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Croacia">CRO</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">22<span class="weekday-mobile">Viernes</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-e">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo E</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Brasil">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/brasil.svg" alt="Brasil">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Brasil">BRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Costa Rica">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/costa-rica.svg" alt="Costa Rica">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Costa Rica">COS</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-d">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo D</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Nigeria">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/nigeria.svg" alt="Nigeria">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Nigeria">NIG</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Islandia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/islandia.svg" alt="Islandia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Islandia">ISL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-e">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo E</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Serbia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/serbia.svg" alt="Serbia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Serbia">SER</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Suiza">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/suiza.svg" alt="Suiza">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Suiza">SUI</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">23<span class="weekday-mobile">Sábado</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-g">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo G</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Bélgica">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/belgica.svg" alt="Bélgica">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Bélgica">BEl</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Túnez">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/tunez.svg" alt="Túnez">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Túnez">TUN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-f">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo F</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Alemania">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/alemania.svg" alt="Alemania">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Alemania">ALE</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Suecia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/suecia.svg" alt="Suecia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Suecia">SUE</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-f">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo F</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Corea del Sur">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/corea-del-sur.svg" alt="Corea del Sur">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Corea del Sur">COR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="México">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/mexico.svg" alt="México">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="México">MEX</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">24<span class="weekday-mobile">Domingo</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-g">
                                                                                <time class="hora">14:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo G</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Inglaterra">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/inglaterra.svg" alt="Inglaterra">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Inglaterra">ING</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Panamá">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/panama.svg" alt="Panamá">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Panamá">PAN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-h">
                                                                                <time class="hora">17:00 <abbr class="time-zone" title="Central European Time">CET </abbr></time>
                                                                                <p class="grupo">Grupo H</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Japón">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/japon.svg" alt="Japón">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Japón">JAP</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Senegal">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/senegal.svg" alt="Senegal">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Senegal">SEN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-h">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo H</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Polonia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/republica-de-polonia.svg" alt="Polonia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Polonia">POL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href=" #" title="Colombia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/colombia.svg" alt="Colombia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Colombia">COL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day">
                                                                            <div class="date">25<span class="weekday-mobile">Lunes</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-a">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo A</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Arabia Saudí">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/arabia-saudita.svg" alt="Arabia Saudí">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Arabia Saudita">SAU</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Egipto">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/egipto.svg" alt="Egipto">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Egipto">EGI</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-a">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo A</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Uruguay">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/uruguay.svg" alt="Uruguay">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Uruguay">URU</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Rusia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo A/rusia.svg" alt="Rusia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Rusia">Rus</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-b">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo B</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="España">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/espana.svg" alt="España">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="España">ESP</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Marruecos">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/marruecos.svg" alt="Marruecos">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Marruecos">MAR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-b">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo B</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Irán">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/iran.svg" alt="Irán">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Irán">IRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Portugal">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo B/portugal.svg" alt="Portugal">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Portugal">POR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">26<span class="weekday-mobile">Martes</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-c">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo C</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Dinamarca">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/dinamarca.svg" alt="Dinamarca">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Dinamarca">DIN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Francia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/francia.svg" alt="Francia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Francia">FRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-c">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo C</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Australia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/australia.svg" alt="Australia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Australia">AUS</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Perú">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo C/peru.svg" alt="Perú">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Perú">PER</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-d">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo D</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Islandia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/islandia.svg" alt="Islandia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Islandia">ISL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Croacia">
                                                                                            <img class="bandera img-max-size" src="//as01.epimg.net/img/comunes/fotos/fichas/paises/svg/cro.svg" alt="Croacia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Croacia">CRO</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-d">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo D</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Nigeria">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/nigeria.svg" alt="Nigeria">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Nigeria">NIG</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href=" #" title="Argentina">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo D/argentina.svg" alt="Argentina">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Argentina">ARG</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">27<span class="weekday-mobile">Miércoles</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-f">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo F</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Corea del Sur">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/corea-del-sur.svg" alt="Corea del Sur">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Corea del Sur">COR</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Alemania">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/alemania.svg" alt="Alemania">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Alemania">ALE</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-f">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo F</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="México">
                                                                                            <img class="bandera img-max-size" src="//as01.epimg.net/img/comunes/fotos/fichas/paises/svg/mex.svg" alt="México">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="México">MEX</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Suecia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo F/suecia.svg" alt="Suecia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Suecia">SUE</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-e">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo E</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Serbia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/serbia.svg" alt="Serbia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Serbia">SER</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Brasil">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/brasil.svg" alt="Brasil">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Brasil">BRA</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-e">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo E</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Suiza">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/suiza.svg" alt="Suiza">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Suiza">SUI</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Costa Rica">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo E/costa-rica.svg" alt="Costa Rica">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Costa Rica">COS</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day">
                                                                            <div class="date">28<span class="weekday-mobile">Jueves</span></div>
                                                                            <p class="fase">Fase de Grupos</p>
                                                                            <div class="cont-resultados grupo-h">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo H</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Senegal">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/senegal.svg" alt="Senegal">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Senegal">SEN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href=" #" title="Colombia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/colombia.svg" alt="Colombia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Colombia">COL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-h">
                                                                                <time class="hora">16:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">Grupo H</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Japón">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/japon.svg" alt="Japón">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Japón">JAP</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Polonia">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo H/republica-de-polonia.svg" alt="Polonia">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Polonia">POL</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-g">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo">  Grupo G</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Panamá">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/panama.svg" alt="Panamá">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Panamá">PAN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Túnez">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/tunez.svg" alt="Túnez">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Túnez">TUN</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="sede"></p>
                                                                            </div>
                                                                            <div class="cont-resultados grupo-g">
                                                                                <time class="hora">20:00 <abbr class="time-zone" title="Central European Time">CET </abbr> </time>
                                                                                <p class="grupo"> Grupo G</p>
                                                                                <div class="cont-marcador noequipos">
                                                                                    <div class="col-equipo-local">
                                                                                        <a class="equipo" href="#" title="Inglaterra">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/inglaterra.svg" alt="Inglaterra">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Inglaterra">ING</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-equipo-visitante">
                                                                                        <a class="equipo" href="#" title="Bélgica">
                                                                                            <img class="bandera img-max-size" src="assets/images/PAISES/grupo G/belgica.svg" alt="Bélgica">
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" title="Bélgica">BEl</abbr>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="sede"></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="day Descanso">
                                                                            <div class="date">29<span class="weekday-mobile">Viernes</span></div>
                                                                            <p class="fase">Final de la primera fase</p>
                                                                        </td> -->
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php require_once('includes/footer.php'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php require_once('includes/scripts.php'); ?>
</body>

</html>
