<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('site/head.php'); ?>
</head>

<body>
    <!-- "Container" que contiene todo el contenido (header, footer incluídos) al cual se le define el ancho máximo que puede tener el sitio. -->
    <div id="container">
        <!-- Header del home. -->
        <?php include('site/header.php'); ?>
        <section id="content_section"><!-- Sección de contenido > comienzo -->

            <h4 class="subsection_title" style="margin-top: 0.5em; padding-bottom: 0.5em">ASTROLOGICAL CONSULTATION</h4>
            <section class="consultory">
                <section class="info">
                    <h5 class="title">What is Solar Return?</h5>
                    <p>How to approach this new year? Will I achieve my goals? How to overcome potential obstacles? Will the expected changes materialize? Family, work, finances, relationships, health, and more are essential aspects of our lives where decisions need to be made, and the best course of action is not always clear.</p>
                    <p><strong>Solar Return provides insights into the energetic dynamics of your personal year.</strong> What lessons will the year bring?</p>
                    <p>Solar Return, starting on our birthday, is the most significant date of the year as it <strong>sets concrete trends for the next 12 months of our life.</strong> It is a personal way to study the <strong>cycles of change</strong> and highlights where the action will take place during the year.</p>
                    <div class="center-box" style="padding: 5px; background-color: #f4f4f4; border-radius: 10px; border:none;">
                        <p style="text-align: center;font-size: 18px; color: #8E8F8F;">The <strong>main function</strong> of Solar Return is to keep us <strong>oriented and informed</strong> about what might happen, so that we are not surprised by unexpected personal actions and attitudes different from the usual.</p>
                    </div>
                    <p>With the insights provided by Solar Return, we can face all the decisive moments of the upcoming year with greater confidence, <strong>offering us the opportunity to change, succeed, and evolve.</strong> It depends on each person's decision-making ability to face events more consciously and thus have a bit more control over our <strong>destiny</strong>.</p>
                    <p>The Solar Return chart is cast for the exact minute and second when the <strong>Sun returns to its natal position</strong> each year. It is the Sun's return to the position it occupied at birth, astronomically confirmed. Therefore, we can view Solar Return as a small new birth, a <strong>new cycle</strong> that opens us to <strong>new dynamics and possibilities</strong>, which must be seized.</p>
                </section>
                <section class="apply">
                    <figure class="carta-natal">
                        <img src="img/revolucion-solar.jpg" alt="carta natal" />
                    </figure>

                    <a href="consultory-solicitar-revolucion-solar.php" class="request_button revolution">
                        <p class="big_line">REQUEST MY SOLAR RETURN</p>
                    </a>
                </section>
            </section>
        </section><!-- Sección de contenido > final -->
        <!-- Footer -->
        <?php include('site/footer.php'); ?>

    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>