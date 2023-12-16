<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
		<style>

		/* ESTILOS DEL FORMULARIO */
			.contacto {
				background: #5E397A;
				width: 100%;
				padding: 20px;
				margin-top: 50px;
				margin-bottom: 50px;
			}

			input, textarea {
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
				margin-top: 10px!important;
			}

			/*  FIN ESTILOS DEL FORMULARIO */

		.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover, .dropdown-menu>li>a:hover
		{
			color: #ff8b1e;
			text-decoration: none;
			background-color: #f5f5f5;
			outline: 0;
		}
		.panel-default
		{
			border-color: white;
		}
		.panel-default>.panel-heading
		{
			color: #333;
			background-color: white;
			border-color: white;
		}
		.nav-tabs
		{
			border-bottom: 0px solid #eee;
		}
		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
		{
			color: white;
			cursor: default;
			background-color: #ff8b1e;
			border: 0px solid #ddd;
			border-bottom-color: #eee;
		}
		.nav-tabs>li>a:hover
		{
			border-color: #eee;
			font-size: 16px;
		}
		.nav-tabs>li>a
		{
			border-color: #eee;
			font-size: 16px;
			color:#ff8b1e;
		}
		.solicita_btn
		{
			cursor: pointer;
			border: none;
			background: #3277ae;
			color: #FFF;
			margin: 0 0 5px;
			padding: 10px 19px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			font: bold 16px "PT Sans", sans-serif;
			text-transform: uppercase;
		}
		.solicita_btn:hover
		{
			background: #be0f34;
			-webkit-transition: background 0.3s ease-in-out;
			-moz-transition: background 0.3s ease-in-out;
			transition: background-color 0.3s ease-in-out;
		}
		.tab-content p
		{
			font-size: 16px !important;
		}
		img.program_image
		{
			float: left;
			margin-right: 20px;
			width: 100px;
		}
		ul.program_list
		{
			margin-left: 120px;
			width: auto;
			padding-bottom: 30px;
		}
		a, a:link, a:visited, a:hover, a:focus
		{
			color: #fff;
		}
		.article_image
		{
			max-width: 100%;
		}
		.panel-body li:before
		{
			content: "● ";
			color: #ff8b1e; /* or whatever color you prefer */
		}
		.panel-body li
		{
			padding-left: 1em;
			text-indent: -.7em;
			font-size: 15px;
		}
		.panel-body ul
		{
			list-style: none;
			padding:0;
			margin:0;
		}
		.panel-default
		{
			color:#333333;
			font-size: 16px;
		}
		.panel-default h2
		{
			color:#333333;
			font-weight: normal;
			margin-top:30px;
		}
		.panel-default h3
		{
			font-size: 15px;
			border-bottom: 0px;
		}
		.panel-default h4
		{
			color:#ff8b1e;
			font-weight: bold;
			font-size: 21px;
		}
		.panel-default h5
		{
			color:#333333;
			font-size: 17px;
			padding-bottom: 5px;
		}
		.col-sm-6
		{
			padding-bottom: 15px;
		}
		.panel-heading>h4>a
		{
			color: #ff8b1e;
		}
		.panel
		{
			border:0px;
		}
		.youtube-video
		{
			padding: 15px;
			min-width: : 420px;
		}
		/* ▼▼▼▼▼▼▼▼▼▼ NOTAS ▼▼▼▼▼▼▼▼▼▼
			SHORTHAND > font: font-style // font-variant // font-weight // font-size // font-family;

			Tamaños Bootstrap:
			xs: <768 (hasta 767)
			sm: >=768 (hasta 991)
			md: >=992 (hasta 1199)
			lg: >=1200 (en adelante)
			▲▲▲▲▲▲▲▲▲▲ FIN NOTAS ▲▲▲▲▲▲▲▲▲▲ */

			/* ▼▼▼▼▼▼ Estilos <768 (tamaño xs en Bootstrap) ▼▼▼▼▼▼ */
			/* Contenedor de la sección de contenido */
			.harmonic-styles
			{
				border-bottom: 1px solid #ddd;
				margin: 20px 0px 10px -10px;
				padding: 0px 0px 5px 0px;
				width: 100%;
			}

			/* Cabecera del contenido donde está
			la información operativa del evento */
			.harmonic-styles .header-section
			{
				border-bottom: 1px solid #ddd;
				margin: 0px;
				padding: 0px;
			}

			/* Título */
			.harmonic-styles h1
			{
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 27px;
				font-weight: 500;
				line-height: 85%;
				margin: 0px;
			}

			/* Subtítulo */
			.harmonic-styles h2
			{
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 22px;
				font-weight: 300;
				line-height: 110%;
				margin: 8px 0px 0px 0px;
			}

			/* Tipo de evento (CHARLA, CLASE PRESENCIAL, etc.) */
			.harmonic-styles .header-section h3
			{
				border-left-style: solid;
				border-left-width: 2px;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 16px;
				font-weight: 600;
				line-height: 145%;
				margin: 0px 0px 7px 0px;
				padding: 0px 0px 0px 7px;
			}

			/* Color lila del tipo de evento, en eventos de astrología */
			.harmonic-styles.astro .header-section h3
			{
				border-left-color: #9f6cf7;
				color: #9f6cf7;
			}

			/* Color azul claro del tipo de evento, en eventos de psicología */
			.harmonic-styles.psico .header-section h3
			{
				border-left-color: #3c59ea;
				color: #3c59ea;
			}

			/* Fecha */
			.harmonic-styles h4
			{
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 15px;
				font-weight: 300;
				line-height: 145%;
				margin: 7px 0px 10px 0px;
			}
			.harmonic-styles.psico h4
			{
				font-weight: 400;
			}

			/* Título menor dentro del contenido */
			.harmonic-styles h5
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 18px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0 -10px;
				padding: 0px;
			}

			/* Subtítulo menor dentro del contenido */
			.harmonic-styles h6
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 17px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0 0;
				padding: 0px;
			}

			/* Párrafos */
			.harmonic-styles p
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				margin: 8px 0px;
			}

			/* Negritas dentro de los párrafos e items de listas no ordenadas */
			.harmonic-styles p strong,
			.harmonic-styles li strong,
			{
				color: #606060;
				font-weight: 700;
			}

			/* Links */
			.harmonic-styles p a
			{
				color: #3c59ea;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
			}

			/* Listas no ordenadas */
			.harmonic-styles ul
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				list-style-type: none;
				padding: 0px 0px 0px 15px;
				margin: 0px;
			}

			/* Items de las listas no ordenadas */
			.harmonic-styles ul li
			{
				margin: 8px 0px;
				padding: 0px;
			}

			/* Listas ordenadas */
			.harmonic-styles ol
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				list-style-type: decimal;
				padding: 0px 0px 0px 15px;
				margin: 0px;
			}

			.harmonic-styles ol li
			{
				margin: 8px 0px;
				padding: 0px;
			}

			.harmonic-styles .panel-body ul
			{
				list-style-type: none;
			}
			
			@media screen and (min-width: 768px)
			{
				/* ▼▼▼▼▼▼ Estilos para >=768 (tamaños sm, md y lg en Bootstrap) ▼▼▼▼▼▼ */
				/* Contenedor de la sección de contenido */
				.harmonic-styles
				{
					margin: 30px auto 30px 20px;
					width: 100%;
				}

				/* Cabecera del contenido donde está
				la información operativa del evento */
				.harmonic-styles .header-section
				{
					border-bottom: 1px solid #ddd;
					margin: 0px;
					padding: 0px;
				}

				/* Título */
				.harmonic-styles h1
				{
					color: #414141;
					font-family: "Roboto", Arial, sans-serif;
					font-size: 27px;
					font-weight: 500;
					line-height: 85%;
					margin: 0px;
				}

				/* Subtítulo */
				.harmonic-styles h2
				{
					color: #414141;
					font-family: "Roboto", Arial, sans-serif;
					font-size: 22px;
					font-weight: 300;
					line-height: 145%;
					margin: 0px;
				}

				/* Tipo de evento (CHARLA, CLASE PRESENCIAL, etc.) */
				.harmonic-styles h3
				{
					border-left: 2px solid #9f6cf7;
					color: #9f6cf7;
					font-family: "Roboto", Arial, sans-serif;
					font-size: 16px;
					font-weight: 600;
					line-height: 145%;
					margin: 0px;
					padding: 0px 0px 0px 7px;
				}

				/* Fecha */
				.harmonic-styles h4
				{
					color: #414141;
					font-family: "Roboto", Arial, sans-serif;
					font-size: 15px;
					font-weight: 300;
					line-height: 145%;
					margin: 7px 0px 10px 0px;
				}

				/* Título menor dentro del contenido */
				.harmonic-styles h5
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 20px;
					font-weight: 700;
					line-height: 145%;
					margin: 8px 0 -10px;
					padding: 0px;
				}

				/* Subtítulo menor dentro del contenido */
				.harmonic-styles h6
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 17px;
					font-weight: 700;
					line-height: 145%;
					margin: 8px 0 0;
					padding: 0px;
				}

				/* Párrafos */
				.harmonic-styles p
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 15px;
					font-weight: 400;
					line-height: 145%;
					margin: 8px 0px;
				}

				/* Los párrafos que estén inmediatamente después de un h5 */
				.harmonic-styles h5 + p
				{
					margin-top: 8px;
				}

				/* Negritas dentro de los párrafos */
				.harmonic-styles p strong,
				.harmonic-styles li strong,
				{
					color: #606060;
					font-weight: 700;
				}

				/* Links */
				.harmonic-styles p a,
				.harmonic-styles p a:active,
				.harmonic-styles p a:link,
				.harmonic-styles p a:visited,
				{
					color: #3c59ea;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 15px;
					font-weight: 400;
				}

				/* Listas no ordenadas */
				.harmonic-styles ul
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 15px;
					font-weight: 400;
					line-height: 145%;
					list-style-type: disc;
					padding: 0px 0px 0px 30px;
					margin: 0px;
				}

				/* Items de las listas no ordenadas */
				.harmonic-styles ul li
				{
					margin: 0 0 0 -12px;
					padding: 0px;
				}

				/* Listas no ordenadas */
				.harmonic-styles ol
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 15px;
					font-weight: 400;
					line-height: 145%;
					list-style-type: decimal;
					padding: 0px 0px 0px 30px;
					margin: 0px;
				}

				/* Items de las listas no ordenadas */
				.harmonic-styles ol li
				{
					margin: 10px 0px;
					padding: 0px;
				}

				/* El primer li de los ul que estén inmediatamente después de un h5 */
				.harmonic-styles h5 + ul li:first-child
				{
					margin-top: 8px;
				}
				.harmonic-styles .panel-body ul
				{
					list-style-type: none;
				}
			}
		/* Estilos para que los videos de YouTube sean responsive */
			.video-container
			{
				display: block;
				margin: 0px auto 30px;
				max-width: 560px;
				max-height: 315px;
				width: 100%;
			}
			@media screen and (min-width: 360px)
			{
				.video-container
				{
					max-width: 464px;
					min-width: 300px;
					width: 100%;
				}
			}
			@media screen and (min-width: 768px)
			{
				.video-container
				{
					float: right;
					margin: 0px 0px 20px 20px;
					width: 50%;
				}
			}
			.video-container .video-responsive
			{
				background-color: lightblue;
				position: relative;
				padding-bottom: 56%; /* 16/9 ratio */
				padding-top: 30px; /* IE6 workaround*/
				height: 0;
				overflow: hidden;
				width: 100%;
			}
			.video-container .video-responsive iframe,
			.video-container .video-responsive object,
			.video-container .video-responsive embed
			{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
		/* FIN Estilos para que los videos de YouTube sean responsive */
			@media screen and (min-width: 500px)
			{
				.astrology-video
				{
					display: none;
				}
			}
		</style>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="container" style="background-color: #fff;">
			<?php include('site/header.php'); ?>
			<div class="col-sm-12" style="padding: 0px;">
				<img src="http://www.aztlan.org.ar/assets/images/eventos/Landing-Medicina-y-Astrologia-tradicional-tibetana-en-Argentina.jpg" width="100%">	
			</div>
			<section id="content_section">
				<!-- Secci&oacute;n principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-9" style="margin-top: -30px;">
								<div class="harmonic-styles astro">
									

			<!-- titulo -->
            <div class="page-header articulo_header">
              <!-- ADDTHIS
              Go to www.addthis.com/dashboard to customize your tools
              <div class="addthis_inline_share_toolbox" style="margin: 20px 0px 10px 0px;"></div>
              -->
              <a name="arriba"></a>


              <p style="font-size: 15px; margin: 0px; line-height: 145%;font-family: 'PT Sans', sans-serif;">

                <strong>El centro budista Kagyu Tekchen Chöling y la Escuela de Filosofía y Psicología Aztlan, se complacen en anunciar la sexta gira internacional de la prestigiosa médica Jamyang Dolma y la astróloga Tsering Chösom, pertenecientes al Men Tsi Kang. </strong>

              <br><br>

              El Men Tsi Kang, es el <strong>Instituto de Medicina y Astrología</strong> fundado en 1961 por <strong>S.S. el Dalai Lama</strong>, en Dharamsala, India; cuyo objetivo principal es preservar, promover y revivir este tradicional sistema tibetano. 

              <br><br>

              Una oportunidad única de conocer los beneficios de esta milenaria ciencia, de la mano de auténticos profesionales tibetanos.
              </p>

            </div>

            <!--Medicina  -->

            <div style="display: inline-block;">
              <p class="h2sub" style="float: left; margin:0 8px 5px 0; font-size: 28px !important; line-height: 24px!important;"><strong>Conferencia de Medicina Tradicional Tibetana </strong></p>
              <div class="visible-md visible-lg" id="contents2" style="float: left; text-align: left; margin: 0px 0px 0px 0px; border-radius: 2px;">
              <a href="http://www.aztlan.org.ar/pages/psi/?c=2331/3/7" class="button solicita_btn" style="padding: 8px 13px;">RESERVAR LUGAR</a>
            </div>
          </div>
            <p style="font-size: 15px; margin: 0px 0px 10px 0px; line-height: 55%;font-family: 'PT Sans', sans-serif;">por la Dra. Jamyang Dolma </p>

            <div class="visible-xs" id="mobile-contents" style="margin: 16px 0px 11px 0px; border-radius: 2px;">
              <a href="http://www.aztlan.org.ar/pages/psi/?c=2331/3/7" class="button solicita_btn" style="padding: 8px 13px;">RESERVAR LUGAR</a>
            </div>

             <ul class="font18" style="margin: 0px; border-bottom: 1px solid #ddd; padding-bottom: 8px; margin: 0px 0px 10px 0px;">
              <li><strong>Diagnóstico y tratamiento en la medicina tradicional tibetana.</strong></li>
              <li><strong>¿Cuáles son las dolencias en las que la Medicina Tibetana puede ofrecer un mayor resultado?</strong></li>
            </ul>

            <p><strong>Fecha: </strong> Viernes 13 de Abril a las 19 hs.</p>

            <p><strong>Valor: </strong> $700</p>

            <p style="font-size: 15px; margin: 0px 0px 20px 0px; line-height: 145%; border-bottom: 1px solid #ddd; padding-bottom: 8px;font-family: 'PT Sans', sans-serif;">
              <strong>
                La medicina tradicional tibetana</strong> es uno de los sistemas más antiguos y completos. Se funda en siglos de estudios budistas sobre la mente, y se basa en una filosofía holística que busca mantener el funcionamiento armónico y el equilibrio de todas las energías que constituyen el conjunto psicofísico de la persona.
              

              <br><br>


La <strong>Dra. Jamyang Dolma</strong> nació en Bután en 1973, y se recibió de médica en 1998, en el Colegio de Medicina Tibetana del Men Tsi Kang, luego de completar sus estudios durante 5 años y 1 año de residencia bajo la tutela de los doctores más destacados.
          Desde entonces fue médica residente en varias clínicas del  Instituto en los estados de Himachal Pradesh y Bengala oriental, en India. 

          



        Del 2008 al 2011, formó parte del equipo que tradujo al inglés “Los Cuatro Tratados Fundamentales de la medicina tradicional tibetana”, el famoso Gyu Shi. Estos tratados médicos fueron compuestos por el reputado médico Yutok Yonten Gonpo del siglo 11. 

        <br><br>

      En 2009 obtuvo un postgrado en medicina tradicional tibetana. Del 2011 al 2013, fue directora del Departamento de Investigación del Men TsI Kang. Y actualmente es directora de la clínica del Instituto en Salugara en el estado de Bengala oriental, India. 

      <br><br>

    La doctora Jamyang ha representado al Instituto en varias conferencias sobre la medicina tradicional, y en abril de 2013, participó de una gira oficial por varios países de Sudamérica, brindando conferencias y consultas en nuestro país.</p>





            <!--Astrología  -->

            <div style="display: inline-block;">
              <p class="h2sub" style="float: left; margin:0 8px 5px 0; font-size: 28px !important; line-height: 24px!important;"><strong>Conferencia de Astrología Tradicional Tibetana </strong></p>
              <div class="visible-md visible-lg" id="contents2" style="float: left; text-align: left; margin: 0px 0px 0px 0px; border-radius: 2px;">
              <a href="http://www.aztlan.org.ar/pages/psi/?c=2332/3/7" class="button solicita_btn" style="padding: 8px 13px;">RESERVAR LUGAR</a>
            </div>
          </div>
            <p style="font-size: 15px; margin: 0px 0px 10px 0px; line-height: 55%;font-family: 'PT Sans', sans-serif;">por la Lic. Tsering Chösom</p>

            <div class="visible-xs" id="mobile-contents" style="margin: 16px 0px 11px 0px; border-radius: 2px;">
              <a href="http://www.aztlan.org.ar/pages/psi/?c=2332/3/7" class="button solicita_btn" style="padding: 8px 13px;">RESERVAR LUGAR</a>
            </div>

             <ul class="font18" style="margin: 0px;, sans-serif; border-bottom: 1px solid #ddd; padding-bottom: 8px; margin: 0px 0px 10px 0px;">
              <li><strong>Astrología tibetana</strong></li>
              <li><strong>Aplicaciones prácticas para la vida cotidiana</strong></li>
            </ul>

            <p style="font-size: 15px; margin: 0px; line-height: 145%;font-family: 'PT Sans', sans-serif;"><strong>Fecha: </strong> Sábado 14 de Abril a las 19 hs.</p>

            <p style="font-size: 15px; margin: 0px; line-height: 145%; padding-bottom: 18px;font-family: 'PT Sans', sans-serif;"><strong>Valor: </strong> $700</p>

            <p style="font-size: 15px; margin: 0px 0px 20px 0px; line-height: 145%; border-bottom: 1px solid #ddd; padding-bottom: 8px;font-family: 'PT Sans', sans-serif;">

              En <strong>la astrología tradicional tibetana</strong> se utilizan el cálculo y la interpretación basada en los 5 elementos, los 8 trigramas (parka), los 9 números cuadrados mágicos (mewa) y los 12 signos animales de la ciencia astrológica (djung-tsi)enseñada por el Señor Manjushri, personificación de la sabiduría de Buda; así como el cálculo y la interpretación de la ubicación de los cuerpos celestes de la astronomía (kar-tsi) proveniente del Señor Kalachakra, la Rueda del Tiempo. El calendario tibetano anual se prepara con gran cuidado ya que es la fuente de información para estas lecturas.

              <br><br>

La Licenciada <strong>Tsering Chösom </strong> nació en India en 1965, y se recibió de licenciada en ciencia astrológica, que reúne la formación en astrología y astronomía tradicional tibetana, en 1987, en el colegio que pertenece al Men-Tsi-Kang.

          <br><br>

        Desde entonces, ha trabajado en el Departamento de ciencia astrológica del Men-Tsi-Kang, en la preparación de almanaques y trabajos astrológicos.


        <br><br>

      En el 2000, obtuvo un postgrado en ciencia astrológica con distinciones. De 1998 al 2002, enseñó en el Colegio del Instituto. También ha escrito muchos artículos sobre este tema y actualmente es la directora del Departamento de ciencia astrológica del Men-Tsi-Kang.

      <br><br>

    A lo largo de estos años, la Lic. Tsering lideró las giras de divulgación a diferentes países de Asia, Europa, Rusia y Norte América.</p>

<p><strong>Ciclo de Conferencias organizado por el Instituto Kagyu Tekchen Choling de estudio y práctica del Budismo Tibetano y la Escuela de Psicología y Filosofía Aztlan.</strong></p>


								</div>
							</div>

							<!--<a href="#top" class="button solicita_btn" style="margin-left: 450px;">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>-->
							<div style="text-align: center; margin: 0px 0px 0px 0px; border-radius: 2px;" class="mobile-visibility-none">
             				 
							<div class="col-xs-12 col-md-3 side_section" style="margin-top: -20px;">
								<?php include('site/form-astro.php'); ?>

								<?php include('site/events-astro.php'); ?>
							</div>
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