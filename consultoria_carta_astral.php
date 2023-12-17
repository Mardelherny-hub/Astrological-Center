<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('site/head.php'); ?>
    <style>
        /*  ESTILOS DEL FORMULARIO */
        .contacto {
            background: #5E397A;
            width: 100%;
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        input,
        textarea {
            padding: 10px;
            margin: 10px 0px;
            font-size: 1.5em;
            width: 100%;
        }

        button {
            background: #4C0B5F;
            color: #fff;
            border-radius: 2px;
            border: none;
            padding: 10px 20px;
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 10px !important;
        }

        /*  FIN ESTILOS DEL FORMULARIO */

        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:focus,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>li>a:hover {
            color: #ff8b1e;
            text-decoration: none;
            background-color: #f5f5f5;
            outline: 0;
        }

        .panel-default {
            border-color: white;
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: white;
            border-color: white;
        }

        .nav-tabs {
            border-bottom: 0px solid white;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: white;
            cursor: default;
            background-color: #ff8b1e;
            border: 0px solid #ddd;
            border-bottom-color: transparent;
        }

        .nav-tabs>li>a:hover {
            border-color: white white white;
            font-size: 17px;
        }

        .nav-tabs>li>a {
            border-color: white white white;
            font-size: 17px;
            color: #ff8b1e;
        }

        .solicita_btn {
            cursor: pointer;
            border: none;
            background: #3277ae;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px 19px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font: bold 17px "PT Sans", sans-serif;
            text-transform: uppercase;
        }

        .solicita_btn:hover {
            background: #be0f34;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        .tab-content p {
            font-size: 17px !important;
        }

        img.program_image {
            float: left;
            margin-right: 20px;
            width: 100px;
        }

        ul.program_list {
            margin-left: 120px;
            width: auto;
            padding-bottom: 30px;
        }

        a,
        a:link,
        a:visited,
        a:hover,
        a:focus {
            color: #fff;
        }

        .article_image {
            max-width: 100%;
        }

        h2.title {
            font-size: 20px;
            color: #333333;
            font-weight: normal;
            margin-top: 28px;

        }

        .panel-default h3 {
            font-size: 17px;
            border-bottom: 0px;
        }

        h4.subtitle {
            color: #ff8b1e;
            font-weight: bold;
            font-size: 19px;
        }

        .panel-default h5 {
            color: #333333;
            font-size: 17px;
            padding-bottom: 5px;
        }

        .col-sm-6 {
            padding-bottom: 17px;
        }

        .video-container {
            display: block;
            margin: 0px auto 30px;
            max-width: 560px;
            max-height: 315px;
            width: 100%;
        }

        @media screen and (min-width: 360px) {
            .video-container {
                min-width: 300px;
                width: 50%;
            }
        }

        @media screen and (min-width: 768px) {
            .video-container {
                float: left;
                margin: 0px 20px 20px 0px;
            }
        }

        .video-container .video-responsive {
            background-color: lightblue;
            position: relative;
            padding-bottom: 50%;
            /* 16/9 ratio */
            padding-top: 30px;
            /* IE6 workaround*/
            height: 0;
            overflow: hidden;
            width: 100%;
        }

        .video-container .video-responsive iframe,
        .video-container .video-responsive object,
        .video-container .video-responsive embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media screen and (max-width: 600px) {
            .articulo_text_header {
                font-size: 26px;
            }

            .mobile-visibility-none {
                display: none;
            }
        }

        .main_section .container-fluid .row .col-md-9 section p {
            font-size: 1.8em;
        }

        @media only screen and (max-width: 460px) {
            .titulo-mobile {
                font-size: 17px !important;
            }
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="container" style="background-color: #fff;">
        <?php include('site/header.php'); ?>
        <section>
            <div style="background-color: #ebebeb;" class="videoint">
                <img src="http://www.aztlan.org.ar/assets/images/formation/consultoria.jpg" width="100%" height="auto" />
            </div>
        </section>
        <section id="content_section" style="margin-left: 30px;">
            <!-- Secci&oacute;n principal > comienzo -->
            <section class="main_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9" style="padding: 0px;">
                            <section class="article_section" style="padding-right: 80px; padding-bottom: 50px;">
                                <!--h2 id="top" class="articulo_text_header titulo-mobile" style="font-size: 25px; font-weight: 700; margin-bottom: 0; margin-top: 0px; text-transform: uppercase;">El Alfabeto Astrológico</h2>
                                
                        <p  style="font-size: 21px; padding: 0px; margin-top: 5px;">-Curso de Verano-</p-->
                                <!--p style="font-size: 17px;">- Averiguá por Descuentos -</p-->
                                <div class="texto" style="margin-right: 0px;">

                                    <!--hr style="margin-top: 5px;"-->

                                    <div class="video-container">
                                        <div class="video-responsive">
                                            <iframe width="565" height="300" src="https://www.youtube.com/embed/3Mq7MDab1bk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <br>
                                    <!--p style="font-size: 16px; margin-bottom: 0; margin-top: -15px"><strong>INICIO: ENERO.</strong><br>Turno mañana:</p>
                        <ul style="margin-bottom: 10px; list-style-position: inside;">
                            <li style="font-size: 15px;margin-bottom: 10px;">Jueves 24 de Enero, 10:30 hs.</li>
                        </ul>
                        <br>

                        <p style="font-size: 16px; margin-bottom: 0;">Turno tarde:</p>
                        <ul style="margin-bottom: 10px; list-style-position: inside;">
                            <li style="font-size: 15px;">Jueves 24 de Enero, 19 hs.</li>
                        </ul>
                        <br-->

                                    <p style="font-size: 17px; margin-bottom: 0; margin-top: -15px"><strong>REQUEST YOUR NATAL CHART, SOLAR RETURN, AND MORE.</strong></p>
                                    <hr style="margin: 0px 0px 2px 0px;">
                                    <br>
                                    <p style="margin-bottom: 1px; background-color: #f7efef"><strong>Natal Chart</strong></p>
                                    <ul style="margin-bottom: 10px; list-style-position: inside;">
                                        <li style="font-size: 14px;margin-bottom: 10px;">1-hour interview + 20-page report and drawing of your chart.</li>
                                    </ul>

                                    <p style="margin-bottom: 1px;  background-color: #f7efef"><strong>Solar Return</strong></p>
                                    <ul style="margin-bottom: 10px; list-style-position: inside;">
                                        <li style="font-size: 14px;margin-bottom: 10px;">1-hour interview + 20-page report and drawing of your Natal Chart and Solar Return.</li>
                                    </ul>

                                    <p style="margin-bottom: 1px;  background-color: #f7efef"><strong>Synastry</strong></p>
                                    <ul style="margin-bottom: 10px; list-style-position: inside;">
                                        <li style="font-size: 14px;margin-bottom: 10px;">3 interviews of 1 hour each + 3 reports of 20 pages each and drawings of both natal charts.</li>
                                    </ul>
                                    <br><br><br>

                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p style="margin-bottom: 1px;  background-color: #f7efef"><strong>Astrology for Your Entrepreneurship</strong></p>
                                            <ul style="margin-bottom: 10px; list-style-position: inside; padding-left: 0px;">
                                                <li style="font-size: 14px;margin-bottom: 10px;">With prior consultation of available services.</li>
                                            </ul>
                                        </div>

                                        <div class="col-xs-12 col-md-6">
                                            <p style="margin-bottom: 1px;  background-color: #f7efef"><strong>Astrological Therapy</strong></p>
                                            <ul style="margin-bottom: 10px; list-style-position: inside; padding-left: 0px;">
                                                <li style="font-size: 14px;margin-bottom: 10px;">A weekly or monthly guide with a study of Lunar Return, Directions, and Astrological Transits.</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>



                                <!--div class="row">
                      <div class="col-xs-12 col-md-6">
                        <p style="margin-bottom: 1px;  background-color: #f7efef"><strong>Astrología para tu Emprendimiento</strong></p>
                        <ul style="margin-bottom: 10px; list-style-position: inside; padding-left: 0px;">
                            <li style="font-size: 14px;margin-bottom: 10px;">Con previa consulta de los servicios disponibles.</li>
                        </ul>
                      </div>

                      
                      <div class="col-xs-12 col-md-6">
                        <p style="margin-bottom: 1px;  background-color: #f7efef"><strong>Terapia Astrologíca</strong></p>
                        <ul style="margin-bottom: 10px; list-style-position: inside; padding-left: 0px;">
                            <li style="font-size: 14px;margin-bottom: 10px;">Una guía semanal o mensual con estudio de Revolución Lunar, Direcciones y Tránsitos Astrológicos </li>
                        </ul>
                     </div>
                        </div-->
                                <hr>


                                <hr>


                                <div class="row" style="margin-bottom:50px;">
                                    <!--div class="col-md-6 col-xs-12">
                            
                            <h3 class="h2sub" style="margin-bottom: 10px; margin-top: 15px; font-size: 18px;"><b>¿Cómo leer la Carta Natal?</b></h3>

                            <hr style="margin-top: 10px; margin-bottom: 10px;">

                            <iframe style="width: 100%;min-height: 250px" src="https://www.youtube.com/embed/TSUTs0PPmcg" frameborder="0" allowfullscreen=""></iframe>

                        </div-->
                                    <div class="col-md-6 col-xs-12">
                                        <h3 class="h2sub" style="margin-bottom: 10px; margin-top: 15px; font-size: 18px;"><strong>What is Solar Return?</strong>
                                        </h3>
                                        <hr style="margin-top: 10px; margin-bottom: 10px;">
                                        <iframe style="width: 100%;min-height: 250px;" src="https://www.youtube.com/embed/QsVZGXnnjSI" frameborder="0" allowfullscreen=""></iframe>
                                    </div>



                                </div>

                                <!--div align="center"; >
                    <p style="font-size: 17px; margin-bottom: 0;">
                            <strong>INGRESAR AL PAGO</strong></p>
                               <div>
                                 <a href="" target="_blank"><img style="width:270px; height:155px;" src="http://www.centroastrologico.com.ar/assets/images/paypal-pay.png" alt=""></a>
                               </div>

                    </div-->

                            </section>
                            <!--div style="display: flex;" class="mobile-visibility-none hidden-xs hidden-s">
                                    <a href="#top" class="button solicita_btn" style=" margin: 0 auto">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
                                </div-->
                        </div>

                        <div class="col-md-3 side_section" style="padding: 0px;">

                            <section class="apply">

                                <div>
                                    <!--<h5 class="title" style="color:white;">SOLICITAR CARTA NATAL</h5>-->
                                    <div class="contacto" style="border-radius: 12px; margin: 0px;">
                                        <div>
                                            <form id="contact" action="gracias.php" method="post">
                                                <h3 style="color:white;">Ask For Your Natal Chart</h3>

                                                <fieldset>
                                                    <input name="name" placeholder="Name and Surname" type="text" tabindex="1" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="email" placeholder="Email" type="email" tabindex="2" required>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="phone" placeholder="Phone" type="tel" tabindex="3" required>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="birthdate" placeholder="Date and time of birth" type="text" tabindex="4" required autofocus>
                                                </fieldset>

                                                <!--fieldset style="margin-bottom: 5px;">
                                            <input name="facebook" placeholder="Facebook" type="text" tabindex="4" required>
                                        </fieldset-->
                                                <fieldset>
                                                    <select style="width: 100%; font-size: 18px; color: #000000;  border-radius: 5px; padding: 10px 0px 10px 6px; " name="pais" placeholder="Facebook" tabindex="5" required>
                                                        <option value="Elegir" id="contact">Select your Country</option>
                                                        <option value="Afganistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Canary Islands">Canary Islands</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Channel Islands">Channel Islands</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Island">Cocos Island</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaco">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Great Britain">Great Britain</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea North">Korea North</option>
                                                        <option value="Korea Sout">Korea South</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Midway Islands">Midway Islands</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nambia">Nambia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                        <option value="Nevis">Nevis</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Phillipines">Philippines</option>
                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                        <option value="St Eustatius">St Eustatius</option>
                                                        <option value="St Helena">St Helena</option>
                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                        <option value="St Lucia">St Lucia</option>
                                                        <option value="St Maarten">St Maarten</option>
                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                        <option value="Saipan">Saipan</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Samoa American">Samoa American</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tahiti">Tahiti</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uraguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                        <option value="Wake Island">Wake Island</option>
                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </fieldset>

                                                <fieldset>
                                                    <input name="city" placeholder="City of birth" type="text" tabindex="6" required autofocus>
                                                </fieldset>

                                                <fieldset>
                                                    <input name="social_media" placeholder="Social Media" type="text" tabindex="7" required autofocus>
                                                </fieldset>


                                                <!--h3>Modalidad</h3>
                                        <div class="row">
                                            <div class="col-sm-6" style="padding: 0px 0px 0px 20px;">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Online" name="checkbox[]">
                                                    Online
                                                </label>
                                            </div>
                                            <div class="col-sm-6" style="padding: 0px;">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Presencial" name="checkbox[]">
                                                    Presencial
                                                </label>
                                            </div>
                                        </div-->
                                                <input type="hidden" name="solicita" value="Carta Natal">
                                                <fieldset>
                                                    <textarea name="comment" placeholder="Write your message..." tabindex="8" required></textarea>
                                                </fieldset>

                                                <p style="color: red; margin-bottom: 0"><?php if (isset($error_message)) {
                                                                                            echo $error_message;
                                                                                        } ?></p>

                                                <fieldset>
                                                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                                </fieldset>


                                            </form>
                                        </div>

                                    </div>
                            </section>

                        </div>



                        <div class="col-xs-12 col-sm-6 col-md-3"></div>
                    </div>
                </div>
            </section>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox"></div>
        </section>
    </div>
    <?php include('site/footer.php'); ?>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>