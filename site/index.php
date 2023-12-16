<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include('site/head.php'); ?>

        <?php error_reporting(E_ALL); ?>
        
        <link rel="stylesheet" type="text/css" href="css/efemerides.css" />
        <script src="js/efemerides.js" type="text/javascript"></script>
        
        <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
        <script src="js/jssor.config.js" type="text/javascript"></script>

        <style type="text/css">
        /* Flex Caption Styles */
        .flex-caption
        {
            width: 100%;
            padding: 2% 5%;
            left: 0;
            bottom: 0;
            background: #111; /*#5e397a;*/
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.3);
            font-size: 14px;
            line-height: 18px;
        }
        li.css a
        {
            border-radius: 0;
        }
        </style>
        <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '666546336853489');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=666546336853489&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
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
                    <div class="container-fluid home_content">
                        <?php
                        # Sección de noticias, primera fila
                        include('site/home_content.php');
                        ?>
                        <div class="row">
                            <div class="col-md-9">
                            </div>
                            <div class="col-md-3">
                                <?php
                                # Sección de eventos
                                /*include('site/events-home.php');¨/
                                ?>
                            </div>
                            <div class="col-xs-12">
                                <?php

                                # Sección de videos
                                /*include('site/home_videos_presentation.php');*/

                                # Sección de slider de articulos
                                /* include('site/home_articles_presentation.php');*/
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

        <!-- FlexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>

        <script type="text/javascript">
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
    </body>
</html>