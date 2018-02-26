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
			<!-- Left Sidebar - style you can find in sidebar.scss  -->
			<!-- ============================================================== -->
			<?php    require_once('includes/aside.php'); ?>
			<!-- ============================================================== -->
			<!-- End Left Sidebar - style you can find in sidebar.scss  -->
			<!-- Page wrapper  -->
			<!-- ============================================================== -->
			<div class="page-wrapper">
				<!-- ============================================================== -->
				<!-- Container fluid  -->
				<!-- ============================================================== -->
				<div class="container-fluid">
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
                    <div class="col-lg-12">
                        <div class="card m-t-30">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Grupos</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#calendario" role="tab">Calendario</a> </li>
<!--                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li> -->
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--first tab-->
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-right">
                                                    <div>
                                                        <p class="h4 text-center m-b-20">Grupos - Mundial Rusia 2018</p>
                                                        <p class="hidden-md-up font-10 m-b-20">Desplazate a la derecha para vizualizar el contenido completo</p>
                                                        <div class="row flex">
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-red">
                                                                        <td width="20" align="left"><strong>Grupo A</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo A/rusia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Rusia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo A/arabia-saudita.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Arabia Saudi</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo A/egipto.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Egipto</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo A/uruguay.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Uruguay</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-blue">
                                                                        <td width="20" align="left"><strong>Grupo B</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo B/portugal.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Portugal</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo B/espana.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>España</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo B/marruecos.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Marruecos</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo B/iran.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Irán</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-red">
                                                                        <td width="20" align="left"><strong>Grupo C</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo C/francia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Francia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo C/peru.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Perú</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo C/australia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Australia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo C/dinamarca.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Dinamarca</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-blue">
                                                                        <td width="20" align="left"><strong>Grupo D</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo D/argentina.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Argentina</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo D/nigeria.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Nigeria</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo D/islandia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Islandia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo D/croacia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Croacia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-red">
                                                                        <td width="20" align="left"><strong>Grupo E</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo E/costa-rica.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Costa Rica</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo E/brasil.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Brasil</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo E/Suiza.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Suiza</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo E/serbia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Serbia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-blue">
                                                                        <td width="20" align="left"><strong>Grupo F</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo F/mexico.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Mexico</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo F/alemania.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Alemania</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo F/suecia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Suecia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo F/corea-del-sur.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Corea</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-red">
                                                                        <td width="20" align="left"><strong>Grupo G</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo G/panama.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Panamá</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo G/belgica.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Bélgica</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo G/tunez.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Túnez</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo G/inglaterra.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Inglaterra</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xlg-6 col-lg-12 m-b-20 table-responsive ">
                                                                <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1">
                                                                    <tr class="grupo-name-blue">
                                                                        <td width="20" align="left"><strong>Grupo H</strong></td>
                                                                    </tr>
                                                                    <tr class="texto2">
                                                                        <td width="220" align="left"><strong>Equipo</strong></td>
                                                                        <td width="40" align="center" ><strong>PJ</strong></td>
                                                                        <td width="40" align="center"><strong>G</strong></td>
                                                                        <td width="40" align="center"><strong>E</strong></td>
                                                                        <td width="40" align="center"><strong>P</strong></td>
                                                                        <td width="40" align="center"><strong>GF</strong></td>
                                                                        <td width="40" align="center"><strong>GC</strong></td>
                                                                        <td width="40" align="center"><strong>DIF</strong></td>
                                                                        <td width="40" align="center"><strong>Pts.</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo H/colombia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Colombia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo H/republica-de-polonia.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Polonia</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo H/japon.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Japón</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                    <tr class="texto3">
                                                                        <td width="220" align="left" class="nombre-bandera">
                                                                            <img src="assets/images/PAISES/grupo H/senegal.svg" class="bandera-pais" hspace="3" align="absmiddle" />
                                                                            <span>Senegal</span>
                                                                        </td>
                                                                        <td width="40" align="center" >0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center">0</td>
                                                                        <td width="40" align="center"><strong>0</strong></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="calendario" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-right">
                                                    <div>
                                                        <h1>Mundial de Rusia 2018</h1>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <h2 class="header-month tit-level-2 m-b-10"><strong> Junio 2018</strong></h2>
                                                            <table class="calendario-dias">
                                                                <caption>Calendario del Mundial de Rusia 2018 de fútbol</caption>
                                                                <tbody>
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
                                                                                            <abbr class="nombre-equipo" data-toggle="tooltip" data-toggle="tooltip" title="Rusia">Rus</abbr>
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
                                                                        <td class="day">
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
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <!--tercer tab-->
<!--                                 <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-block">

                                    </div>
                                </div> -->
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
