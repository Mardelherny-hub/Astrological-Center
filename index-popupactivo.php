<!DOCTYPE html>
<html lang="es">
    <head>
        
        <?php include('site/head.php'); ?>

        <?php error_reporting(E_ALL); ?>
        
        <link rel="stylesheet" type="text/css" href="css/efemerides.css" />
        <script src="js/efemerides.js" type="text/javascript"></script>
        
        <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
        <script src="js/jssor.config.js" type="text/javascript"></script>

        <style type="text/css">
        /* ESTILOS DEL POPUP: COMIENZO */
            section.next_activities
            {
                background: #284482 url(popup_images/mosaic_background.png) 0px 0px repeat;
                box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.25);
                display: none;
                left: 10px;
                margin: 0px 20px 0px auto;
                max-width: 492px;
                overflow: auto;
                padding: 0px 5px 5px 5px;
                position: absolute;
                top: 10px;
                width: 90%;
                z-index: 2000;
                
                font-family: "PT Sans", "Lato", Arial, sans-serif;
                font-size: 10px;
            }
            section.next_activities .events_container
            {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-evenly;
            }
            section.next_activities .events_container .event
            {
                margin: 5px 5px 5px 5px;
            }
            section.next_activities .events_container .event .event_content
            {
                flex: 1 231px;
                width: 231px;
            }
            section.next_activities .events_container .event .event_content figure
            {
                margin: 0px;
                overflow: hidden;
                padding: 0px;
                position: relative;
                width: 100%;
            }
            section.next_activities .events_container .event .event_content figure img
            {
                margin: 0px;
                padding: 0px;
                position: relative;
                width: 100%;
            }
            section.next_activities .events_container .event .event_content figure p.event_type
            {
                background-color: rgba(245, 140, 0, 0.8);
                left: 0px;
                margin: 0px;
                padding: 2px 10px;
                position: absolute;
                top: 0px;
                z-index: 3000;

                color: rgba(255, 255, 255, 0.9);
                font-size: 1.2em;
            }
            section.next_activities .events_container .event .event_content .info_content
            {
                padding: 5px 50% 5px 0px;
                position: relative;
            }
            section.next_activities .events_container .event .event_content .info_content time
            {
                padding: 2px 5px 2px 0px;

                color: #222;
                font-size: 1.4em;
                font-weight: 700;
            }
            section.next_activities .events_container .event .event_content .info_content time:hover,
            section.next_activities .events_container .event .event_content .info_content time:active,
            section.next_activities .events_container .event .event_content .info_content time:link,
            section.next_activities .events_container .event .event_content .info_content time:visited,
            section.next_activities .events_container .event .event_content .info_content time:focus
            {
                text-decoration: none;
            }
            section.next_activities .events_container .event .event_content .info_content .more_information_link
            {
                padding: 2px 0px 2px 2px;
                position: absolute;
                top: 4px;
                right: 0px;

                color: #4676ac;
                font-size: 1.2em;
                font-weight: 700;
                text-align: right;
                text-decoration: none;
                text-transform: uppercase;
            }
            section.next_activities h1
            {
                display: block;
                margin: 10px 0px 5px 0px;
                padding: 0px;
                width: 100%;

                color: #eee;
                font-size: 2.4em;
                line-height: 140%;
                text-align: center;
            }
            section.next_activities .x_button
            {
                display: block; 
                margin: 0px;
                padding: 5px 9px;
                position: absolute;
                right: 0px;
                top: 0px;

                color: #ccc;
                font-size: 20px;
                font-weight: 700;
                line-height: 20px;
            }
            section.next_activities .x_button span
            {
                font-size: 0.6em;
                font-weight: 400;
                line-height: 20px;
            }
            section.next_activities .x_button:link,
            section.next_activities .x_button:active,
            section.next_activities .x_button:hover,
            section.next_activities .x_button:focus
            {
                text-decoration: none;
            }
            @media screen and (min-width: 1000px)
            {
                section.next_activities
                {
                    position: fixed;
                }
            }
        /* ESTILOS DEL POPUP: FIN */
        </style>
        
    </head>
    <body>

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
                                #include('site/home_talleres2018.php');

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

            <section style="display: none;" class="next_activities"><!-- Popup: comienzo -->
                <a href="#" class="x_button"><span>CERRAR</span> x</a>
                <h1>ACTIVIDADES DE ABRIL</h1>

                <div class="events_container">
                    <div class="event">
                        <a href="http://www.centroastrologico.com.ar/formacion_anual.php" target="_blank">
                            <div class="event_content">
                                <figure>
                                    <p class="event_type">CARRERA</p>
                                    <img src="popup_images/carrera_astrologia.png" alt="Carrera de Astrología">
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="event">
                        <a href="http://www.aztlan.org.ar/pages/psi/?c=2353/3/7" target="_blank">
                            <div class="event_content">
                                <figure>
                                    <p class="event_type">TALLER</p>
                                    <img src="popup_images/i_ching.png" alt="Taller sobre El Oráculo del I CHING">
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="event">
                        <a href="http://www.aztlan.com.ar/pages/psi/?c=2410/3/7" target="_blank">
                            <div class="event_content">
                                <figure>
                                    <p class="event_type">SEMINARIO</p>
                                    <img src="popup_images/Nietzsche_taller_pop.jpg" alt="Seminario Nietzsche y el Eterno Retorno">
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="event">
                        <a href="http://www.aztlan.com.ar/pages/psi/?c=2433/3/7" target="_blank">
                            <div class="event_content">
                                <figure>
                                    <p class="event_type">CHARLA</p>
                                    <img src="popup_images/curso_astrologia.png" alt="CLAVES PARA INTERPRETAR LA CARTA NATAL" width="231" height="143">
                                </figure>
                            </div>
                        </a>
                    </div>

                    <!--
                    <div class="event">
                        <a href="http://www.centroastrologico.com.ar/tarot_practica_de_tiradas.php" target="_blank">
                            <div class="event_content">
                                <figure>
                                    <p class="event_type">CURSO</p>
                                    <img src="popup_images/curso_tarot_tiradas.png" alt="Curso de Tarot. Práctica de Tiradas">
                                </figure>
                            </div>
                        </a>
                    </div>
                    -->
                </div>
            </section><!-- Popup: fin -->
        </div>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script type="text/javascript">
            function openPopup()
            {
                $(".next_activities").fadeIn(500);
            }

            $(".x_button").click(function(){
                $(".next_activities").fadeOut(500);
            });

            setTimeout(openPopup,4000);
        </script>
    </body>
</html>