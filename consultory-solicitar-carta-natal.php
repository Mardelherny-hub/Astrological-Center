<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('site/head.php'); ?>
    <style>
        .panel-group {
            color: #333;
            font-size: 14px;
        }

        .panel-title a {
            color: #5e397a;
            font-size: 16px;
            font-weight: bold;
        }

        .panel {
            margin-bottom: 20px;
            background-color: transparent;
            border: 0px solid transparent;
            border-radius: 4px;
            border-top: 1px;
            border-bottom: 1px;
            border-color: orange;
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: transparent;
            border-color: transparent;
        }

        .contacto {
            color: white;
            padding: 35px;
            background-color: #f9f8f6;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact .form-check-label {
            font: 18px/28px "Segoe UI", arial, helvetica, roboto, "droid sans", sans-serif;
            color: black;
        }

        #contact h3 {
            display: block;
            margin-bottom: 10px;
        }

        #contact h4 {
            margin: 5px 0 15px;
            display: block;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 5px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 15px;
            padding: 10px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }

        #contact textarea {
            color: black;
            height: 150px;
            max-width: 100%;
            resize: none;
            margin-top: 25px;
        }

        #contact button[type="submit"] {
            cursor: pointer;
            border: none;
            background: #1a032b;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px 19px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
            font: bold 19px "PT Sans", sans-serif;
            text-transform: uppercase;
            width: 100%;
        }

        #contact button[type="submit"]:hover {
            background: #9058bb;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        #contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
            text-align: center;
        }

        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }
    </style>
</head>

<body>
    <!-- "Container" que contiene todo el contenido (header, footer incluídos) al cual se le define el ancho máximo que puede tener el sitio. -->
    <div id="container">
        <!-- Header del home. -->
        <?php include('site/header.php'); ?>
        <section id="content_section"><!-- Sección de contenido > comienzo -->

            <h4 class="subsection_title" style="margin-top: 0.3em;">ASTROLOGICAL CONSULTATION</h4>
            <section class="consultory">
                <section class="info">
                    <h5 class="title">Carta Natal</h5>

                    <p>La <strong>Carta Natal</strong> es un mapa de la posición de los planetas al momento de nuestro nacimiento que indica nuestras <strong>tendencias y aptitudes</strong>. La Carta Natal nos muestra aspectos de nuestro <strong>Destino</strong>, pero también nos guía para que usemos nuestro <strong>Libre albedrío</strong> con más <strong>Consciencia</strong>.

                    <p>Como todo <strong>mapa</strong> podemos usar la Carta Natal para <strong>guiarnos en
                            el recorrido por la vida</strong>, aprendiendo a sortear los obstáculos, encontrando atajos,
                        evitando desviarnos de nuestras metas, aprendiendo a conocer mejor cada uno de
                        los escenarios de nuestra vida y a desenvolvernos en ellos con mayor soltura y
                        destreza. </p>
                    <div class="center-box" style="padding: 5px; background-color: #f4f4f4; border-radius: 10px; border:none;">
                        <p style="text-align: center;font-size: 18px; color: #8E8F8F; ">Una vez una consultante me dijo:
                            <br> <strong>“Con esto me ahorré varios años de terapia...”</strong>.
                        </p>
                    </div>
                    <br><br>
                    <h5 class="title">Preguntas Frecuentes</h5>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        ¿Para qué me sirve hacer mi Carta Natal? <span style="float: right;">&#x25BC;</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li>Para conocerte más a vos mismo.</li>
                                        <li>Para conocer tu verdadera Vocación.</li>
                                        <li>Para saber qué es lo que necesitás para sentirte satisfecho con vos mismo y con
                                            la vida.</li>
                                        <li>Para conocer tu misión en esta vida.</li>
                                        <li>Para entender más el por qué de lo que te pasa, de los obstáculos que aparecen
                                            en tu camino.</li>
                                        <li>Para poder lograr mayor sintonía con tu propia esencia.</li>
                                        <li>Para saber qué es lo que tenés que modificar o trabajar sobre vos mismo, yendo
                                            al grano, sin perder tiempo.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        ¿Qué necesito para hacer mi Carta Natal?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Para hacer tu Carta Natal necesitás tu fecha, hora y lugar de nacimiento.<span style="float: right;">&#x25BC;</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        No tengo mi hora de nacimiento. ¿Puedo hacer igual mi Carta Natal?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Generalmente la hora de nacimiento se encuentra en nuestra partida de nacimiento,
                                    por lo cual es recomendable buscarla allí. En caso de que no la tuviera, se hace lo
                                    que se llama rectificación de la hora natal. A través de preguntas que se hacen al
                                    consultante se puede obtener la hora de nacimiento y por lo tanto hacer la Carta
                                    Natal.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        ¿Por qué se toma la hora de nacimiento?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li>Porque es el primer contacto con el mundo físico.</li>
                                        <li>Porque representa la inicio de nuestra existencia como seres individuales e
                                            independientes del seno materno.</li>
                                        <li>Porque consideramos que el nacimiento es producto del Destino y no del azar, ni
                                            tampoco ̈casualidad ̈. Me pregunto qué es la casualidad, porque en realidad
                                            desde el punto de vista de las Astrología no hay sentido en la casualidad, sino
                                            la Causalidad en todo caso. Todo tiene un sentido y una razón de ser y todos
                                            estamos aquí en la Escuela de la vida, para aprender.</li>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                        ¿La Carta Natal cambia?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    No, la Carta Natal no cambia. Es una y una vez que uno tiene su Carta Natal
                                    completa, estudiada y comprendida en profundidad no es necesario volver a
                                    hacerla. Lo que cambian son los tránsitos y la Revolución Solar, que se calcula en
                                    cada cumpleaños nuestro.
                                    <br><br>
                                    <strong>¿Significa que estamos destinados y no podemos cambiar o elegir?</strong>
                                    <br><br>No, de ninguna manera. <i>Los astros inclinan pero no obligan</i>, es uno de los axiomas
                                    más antiguos de la Astrología. Hablaremos de tendencias y pautas, algunas de ellas
                                    tendrán tanta fuerza que serán difíciles de cambiar, pero no imposible. Es decir hay
                                    un Destino que en parte me determina, pero también hay un libre albedrío que es mi
                                    cuota de libertad de elección y movimiento entre las distintas decisiones de la vida.
                                    La Carta Natal me indica mi Destino, a la vez que me ayuda a usar mejor mi libre
                                    albedrío.
                                </div>
                            </div>
                        </div>
                        <!--
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                            ¿Significa que estamos destinados y no podemos cambiar o elegir?<span style="float: right;">&#x25BC;</span>
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            No, de ninguna manera. Los astros inclinan pero no obligan, es uno de los axiomas
                                            más antiguos de la Astrología. Hablaremos de tendencias y pautas, algunas de ellas
                                            tendrán tanta fuerza que serán difíciles de cambiar, pero no imposible. Es decir hay
                                            un Destino que en parte me determina, pero también hay un libre albedrío que es mi
                                            cuota de libertad de elección y movimiento entre las distintas decisiones de la vida.
                                            La Carta Natal me indica mi Destino, a la vez que me ayuda a usar mejor mi libre
                                            albedrío.
                                        </div>
                                    </div>
                                </div>
                                -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                        ¿Qué es el Ascendente?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Al solicitar tu Carta Natal vas a descubrir cuál es tu signo <strong>Ascendente</strong>, eso
                                    dependerá de la hora de nacimiento. El Ascendente representa al Yo, el Ego. Es la
                                    primer impresión que damos a los demás, cómo me muestro. A la vez que el
                                    Ascendente representa también qué es lo que venimos a aprender.
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="apply">

                    <h5 class="title">SOLICITAR CARTA NATAL</h5>
                    <div class="contacto" style="background-color:#5e397a;
                                border-radius: 12px;
                                display: block;
                                padding: 30px 0px;padding: 20px 35px;">
                        <div>
                            <form id="contact" action="gracias.php" method="post">
                                <h3>Solicitá tu Carta Natal</h3>
                                <fieldset>
                                    <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus>
                                </fieldset>
                                <fieldset>
                                    <input name="email" placeholder="Email" type="email" tabindex="2" required>
                                </fieldset>
                                <fieldset>
                                    <input name="cel" placeholder="Celular" type="tel" tabindex="3" required>
                                </fieldset>
                                <fieldset>
                                    <input name="facebook" placeholder="Facebook" type="text" tabindex="4" required>
                                </fieldset>
                                <fieldset>
                                    <select style=" font-size: 18px; color: #000000;  border-radius: 5px; padding: 10px 185px 10px 6px; " name="pais" placeholder="Facebook" tabindex="4" required>
                                        <option value="Elegir" id="contact">Selecciona tu País</option>
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
                                <h3>Modalidad</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="Online" name="checkbox[]">
                                            Online
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="Presencial" name="checkbox[]">
                                            Presencial
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="solicita" value="Carta Natal">
                                <fieldset>
                                    <textarea name="comentario" placeholder="Escribe tu mensaje..." tabindex="5" required></textarea>
                                </fieldset>
                                <p style="color: red; margin-bottom: 0"><?php if (isset($error_message)) {
                                                                            echo $error_message;
                                                                        } ?></p>
                                <fieldset>
                                    <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Solicitar</button>
                                </fieldset>

                            </form>
                        </div>

                    </div>
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