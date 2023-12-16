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
                    <img src="img/famosos/albert-einstein.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Albert Einstein:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-albert-einstein_221.jpg" alt="Albert Einstein" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/marie-curie.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Marie Curie:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-marie-curie_250.jpg" alt="Marie Curie" />
            </figure>

            <div class="seccion-nombre">
                <figure class="foto">
                    <img src="img/famosos/freud.png" />
                </figure>
                <h5 class="nombre-de-famoso">&raquo; Freud:</h5>
            </div>
            <figure class="carta-natal">
                <img src="images/images/carta-natal-de-freud_218.jpg" alt="Freud" />
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