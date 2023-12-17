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

            <h4 class="subsection_title" style="margin-top: 0.5em; padding-bottom: 0.5em;">ASTROLOGICAL CONSULTATION</h4>

            <section class="consultory">

                <section class="info">
                    <h5 class="title">What is the Natal Chart?</h5>

                    <p>It's common for us to wonder at some point in our lives: Why is this happening to me? What is the purpose of a particular experience? Or, What is my vocation?</p>

                    <p>The <strong>Natal Chart</strong> allows us to answer these and more questions. By understanding the <strong>patterns and unconscious mechanisms</strong> that govern our personality, we can find possible solutions to personal conflicts.</p>

                    <p>Just as a navigator uses a nautical chart to avoid obstacles, we can use the Natal Chart as a <strong>guide to move through life in greater harmony with our essence</strong>, to arrive on time, to avoid unnecessary suffering, to achieve our goals, and to rediscover our course when we feel lost.</p>

                    <p style="font-size: 20px">Creating your Natal Chart helps you:</p>
                    <ul style="font-size: 16px">
                        <li>Know yourself better.</li>
                        <li>Discover your true vocation.</li>
                        <li>Understand what you need to <strong>feel satisfied</strong> with yourself and with life.</li>
                        <li>Uncover your <strong>mission</strong> in this life.</li>
                        <li>Gain insight into the <strong>reasons</strong> behind what happens to you, the <strong>obstacles</strong> that appear in your path.</li>
                        <li>Harmonize more with <strong>your own essence</strong>.</li>
                        <li>Identify what you need to <strong>modify or work on within yourself</strong>, getting to the point without wasting time.</li>
                    </ul>
                    <br>
                    <div class="center-box">
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>

                </section>

                <section class="apply">

                    <figure class="carta-natal">
                        <img src="img/carta-natal.jpg" alt="carta natal" />
                    </figure>

                    <a href="/consultoria_carta_astral.php" class="request_button">
                    <p class="big_line">REQUEST MY NATAL CHART</p>
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