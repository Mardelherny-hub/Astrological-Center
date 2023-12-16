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

    <section id="content_section"><!-- Sección de contenido > comienzo -->

        <section class="main_section"><!-- Sección main > comienzo -->
        <h4 class="subsection_title">CARTAS NATALES DE FAMOSOS</h4>

            <div class="botones">
                <a class="boton"  href="http://www.centroastrologico.com.ar/cartas-natales-de-famosos-deportistas.php">
                    <p>DEPORTISTAS</p>
                </a>
                <a class="boton" href="http://www.centroastrologico.com.ar/cartas-natales-de-famosos-pensadores.php">
                    <p>PENSADORES</p>
                </a>
                <a class="boton" href="http://www.centroastrologico.com.ar/cartas-natales-de-famosos-cientificos.php">
                    <p>CIENT&Iacute;FICOS</p>
                </a>
                <a class="boton" href="http://www.centroastrologico.com.ar/cartas-natales-de-famosos-politicos.php">
                    <p>POL&Iacute;TICOS</p>
                </a>

                <a class="boton" href="http://www.centroastrologico.com.ar/cartas-natales-de-famosos-artistas.php">
                    <p>ARTISTAS</p>
                </a>
            </div>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/eva-peron.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Eva Perón:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-eva-peron_235.jpg" alt="Eva Perón" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/bill-clinton.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Bill Clinton:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-bill-clinton_237.jpg" alt="Bill Clinton" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/cristina-kirchner.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Cristina Kirchner:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-cristina-kirchner_234.jpg" alt="Cristina Kirchner" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/principe-guillermo.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Pr&iacute;ncipe Guillermo:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-del-principe-guillermo_249.jpg" alt="Principe Guillermo" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/margaret-thatcher.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Margaret Thatcher:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-margaret-thatcher_236.jpg" alt="Margaret Thatcher" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/napoleon.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Napole&oacute;n:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-napoleon_240.jpg" alt="Napoleon" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/richard-nixon.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Richard Nixon:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-richard-nixon_245.jpg" alt="Richard Nixon" />
            </figure>

        </section><!-- Sección principal > final -->

        <section class="side_section"><!-- Sección lateral > comienzo -->
            <?php 
            # Sección de eventos
            include('site/events.php');
            ?>
            
            <div class="banner"><!-- Banner de consultoría > comienzo -->
                <img src="img/consultoria_gif.gif" />
            </div><!-- Banner de consultoría > final -->
        </section><!-- Sección lateral > final -->

    </section><!-- Sección de contenido > final -->

    <!-- Footer -->
    <?php include('site/footer.php'); ?>
  
</div>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>