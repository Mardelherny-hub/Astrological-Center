<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include('site/head.php'); ?>
    </head>
    <body>
        <!-- "Container" que contiene todo el contenido (header, footer incluídos) al cual se le define el ancho máximo que puede tener el sitio. -->
        <div id="container">
            <!-- Header del home. -->
            <?php include('site/header.php'); ?>
            <!-- Slider principal del home, con los nuevos talleres, videos y etcétera. -->
            <?php
            include('site/home_zodiac_signs_menu.php');
            ?>
            <section id="content_section"><!-- Sección de contenido > comienzo -->
            <section class="main_section"><!-- Sección main > comienzo -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 main-section">
                        <h4 class="subsection_title">SIGNOS DEL ZOD&Iacute;ACO</h4>
                        <section class="sign">
                            <?php
                            include('signs_page_programation.php');
                            ?>
                        </section>
                    </div>
                    <div class="col-md-3 side_section">
                        <?php
                        # Sección de eventos
                        include('site/events.php');
                        ?>
                        <div class="banner"><!-- Banner de consultoría > comienzo -->
                        <img src="img/consultoria_gif.gif" />
                        </div><!-- Banner de consultoría > final -->
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