<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Inicia Sesión - Quiniela Virtual</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/css-login/style.css" />
    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                <div class="mt-2">
                                    <a href="http://www.pvcorredores.com/index.php"><img src="assets/images/p&v-azul.fw.png" alt="MLogo" width="150" class="mx-auto d-block img-fluid"/></a> <!-- brand-logo -->
                                </div>
                                <h1 class=" text-center title">Quiniela Virtual</h1>
                                <p class="content-divider center mt-4"><span>INICIA SESIÓN</span></p>                              
                                <div class="mt-4">
                                    <form action="resumen.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" value="" placeholder="Introduce tu Correo Electrónico" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" value="" placeholder="Introduce tu Contraseña" required>
                                        </div>
                                        <label class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ">Permanecer Conectado</span>
                                        </label>
                                        <button type="submit" class="btn btn-primary float-right">Iniciar Sesion</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <!-- <p class="content-divider center mt-4"><span>or</span></p> -->
                                </div>
                                <p class="mt-4 social-login text-center">
                                    <a href="https://twitter.com/PvCorredores" target="_blank" class="btn btn-twitter">
                                        <em class="ion-social-twitter"></em>
                                    </a>
                                    <a href="https://www.facebook.com/people/PV-Corredores/100012376578606" target="_blank" class="btn btn-facebook">
                                        <em class="ion-social-facebook"></em>
                                    </a>
                                    <a href="https://www.instagram.com/pvcorredores/" target="_blank" class="btn btn-instagram">
                                        <em class="ion-social-instagram"></em>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCId1xthKn6B51qGLkUSDSDg" target="_blank"  class="btn btn-youtube">
                                        <em class="ion-social-youtube"></em>
                                    </a>
                                </p>
                                <p class="text-center">
                                    ¿Aún no tienes una cuenta? <a class="no-decoration" " href="register.php">Regístrate ahora</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
