<!DOCTYPE html>
<html lang="es">
    <head>
        
        <?php include('site/head.php'); ?>

        <?php error_reporting(E_ALL); ?>
        
        <link rel="stylesheet" type="text/css" href="css/efemerides.css" />
        <script src="js/efemerides.js" type="text/javascript"></script>
        
        <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
        <script src="js/jssor.config.js" type="text/javascript"></script>
        
    </head>
    <body>
        <!-- POPUP
        <div class="overlay" id="overlay" style="display:none;"> </div>
        <div class="box" id="box">
            <a class="boxclose" id="boxclose"></a>
            <a href="formacion_anual.php"><img src="popup/popupweb.jpg" alt=""></a>
        </div>
        FIN POPUP-->
        
        <!-- "Container" que contiene todo el contenido (header, footer incluídos) al cual se le define el ancho máximo que puede tener el sitio. -->
        <div id="container">
            <!-- Header del home. -->
            <?php include('site/header.php'); ?>
            <!-- Slider principal del home, con los nuevos talleres, videos y etcétera. -->
            <?php
            include('site/home_main_slider.php');
            include('site/home_zodiac_signs_menu.php');
            ?>
            <section id="content_section"><!-- Sección de contenido > comienzo -->
                <section class="main_section"><!-- Sección main > comienzo -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-9">
                                <?php
                                # Sección de noticias
                                include('site/home_news.php');

                                # Sección de Talleres de Verano 2018
                                include('site/home_talleres2018.php');

                                # Sección de slider de videos
                                include('site/home_videos_presentation.php');

                                # Sección de slider de articulos
                                /* include('site/home_articles_presentation.php');*/
                                ?>
                            </div>
                            
                            <div class="col-md-3 side_section" style="padding-left: 10px; padding-right:10px;margin-bottom: 20px;">
                                <!--
                                <div id="planetas">
                                    <h4 class="subsection_title" style="color: #5e397a; font-size: 2.9em;">Los Planetas Ahora</h4>
                                    <p id="fecha"></p>
                                </div>
                                -->
                                <?php
                                # Sección de eventos
                                include('site/events-home.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </section><!-- Sección principal > final -->
            </section><!-- Sección de contenido > final -->
            
            <!-- Footer -->
            <?php include('site/footer.php'); ?>
        </div>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>