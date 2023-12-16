<!DOCTYPE html>
<?php  
echo '<html lang="es">';
?>
<head>
<title><?php Section::getTitle();?></title>
<?php 
if(!is_null(Section::$contents->contents[0]->details->SEO_desc)){
	echo '<meta name="description" content="';
	echo htmlspecialchars_decode(utf8_decode(Section::$contents->contents[0]->details->SEO_desc));
	echo '">';
	echo "\n";
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  <meta charset="utf-8"> -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if(!is_null(Section::$contents))Section::getFbMeta();?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="<?php Section::getHost();?>site/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/estilos.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/home.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/articulos.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/contacto.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/loading.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/popup/cineclub.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/popup/evento.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/popup/formularios.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/programas.less" />
<link rel="stylesheet/less" type="text/css" href="<?php Section::getHost();?>site/less/astrologia.less" />
<script src="<?php Section::getHost();?>site/less/less-1.4.1.min.js"></script>
-->

<link href="<?php Section::getHost();?>site/css/estilos.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/home.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/articulos.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/contacto.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/loading.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/popup/cineclub.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/popup/evento.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/popup/evento.css" rel="stylesheet">
<link href="<?php Section::getHost();?>site/css/astrologia.css" rel="stylesheet">

<!-- <script src="<?php Section::getHost();?>site/js/script.js"></script>-->
<script src="<?php Section::getHost();?>site/js/script.js?random=<?php echo uniqid(); ?>"></script>
<script src="<?php Section::getHost();?>site/js/assets/swfobject.js"></script>
<script src="<?php Section::getHost();?>site/js/site.js"></script>

<script>var modal=false;</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if IE ]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="<?php Section::getHost();?>site/css/ie.css" rel="stylesheet">
			<![endif]-->
            
            <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '915316421898367');
fbq('track', "PageView");

// ViewContent
// Track key page views (ex: product page, landing page or article)
fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=915316421898367&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47282074-7', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1072075516187205');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1072075516187205&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1072075516187205');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1072075516187205&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
			
</head>
	<body  class="super">	
	<?php 				
		include('site/includes/nav-main.php');
		include('site/includes/signos.php');
	?>

		<!--       PARA BAJAR EL SITIO CUANDO SE PONE FIEX TOP -->
     <div class="site">
     	<nav class="navbar navbar-default navbar-fixed-top visible-xs visible-sm">
         <div class="container nav-conteiner">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="http://aztlan.com.ar/"><img src="<?php Section::getHost();?>site/images/all/logo-2.png" width="40" height="40" /></a>
               <div style="padding-top: 3px;color: #fff;">
	               <div style="font-size: 20px;">Centro Astrol&oacute;gico Aztlan</div>
	               <div style="font-size: 10px;margin-top: -7px;">Dir. Le&oacute;n Azulay</div>
               </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <?php 
					
						foreach (Section::getSite() as $value) {
							if($value->details->toMainMenu==1)
							{
								if(count($value->sections))
								{
									echo '<li class="dropdown">';
									echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.utf8_decode( $value->details->toMainName) .'<span class="caret"></span></a>';
									echo '<ul class="dropdown-menu">';
										foreach ($value->sections as $sub) 
											{
												if(count(Section::$section) >0 && count(Section::$section)>1 && Section::$section[1]->furl == $sub->furl) echo '<li><a href="'.Section::host().$sub->path.Section::$extention.'">'.utf8_decode($sub->details->name).'</a></li>';
												else echo '<li><a href="'.Section::host().$sub->path.Section::$extention.'">'.utf8_decode($sub->details->name).'</a></li>';

												echo '<li role="separator" class="divider"></li>';
											}

									echo '</ul>';

								}else
								{
									echo '<li class=" ';
									if(!is_null(Section::$section) && Section::$section[0]->furl == $value->furl) echo ' active';
									if($value->id== 14 || $value->id == 80) echo ''; //ocultar blog o radio
									if($value->type == 7) echo '"><a href="'.Section::host().$value->path.'">'.utf8_decode( $value->details->toMainName) .' </a>';
									else echo '"><a href="'.Section::host().$value->path.Section::$extention.'">'.utf8_decode( $value->details->toMainName) .' </a>';

								}
							}
							echo '</li>';
						}	
					
					?>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
<!--       BEGIN MENU -->
		<nav class="menu hidden-xs hidden-sm" role="navigation" style="z-index:900">

			<div class="container" id='navegacion'>
				<ul class="list-unstyled list-inline">					
					<?php 
					
						foreach (Section::getSite() as $value) {
							if($value->details->toMainMenu==1)
							{
								
								echo '<li class="mainMenuBtn ';															
								if(!is_null(Section::$section) && Section::$section[0]->furl == $value->furl) echo ' active';
								if($value->id== 14 || $value->id == 80) echo ' hidden-xs hidden-md hidden-sm'; //ocultar blog o radio
								if($value->type == 7) echo '" id="'.$value->furl.'"><div><a title="'. utf8_decode( $value->details->name)  .'" href="'.Section::host().$value->path.'">'.utf8_decode( $value->details->toMainName) .' </a></div>';
								else echo '" id="'.$value->furl.'"><div><a title="'. utf8_decode( $value->details->name)  .'" href="'.Section::host().$value->path.Section::$extention.'">'.utf8_decode( $value->details->toMainName) .' </a></div>';
							
								
								if(count($value->sections))
									{
										echo '<ul style="display:none;">';
										foreach ($value->sections as $sub) 
											{
												if(count(Section::$section) >0 && count(Section::$section)>1 && Section::$section[1]->furl == $sub->furl) echo '<li class="mainMenuBtn active" id="'.$sub->furl.'"><a title="'. utf8_decode( $sub->details->name)  .'" href="'.Section::host().$sub->path.Section::$extention.'">'.utf8_decode($sub->details->name).'</a></li>';
												else echo '<li class="mainMenuBtn" id="'.$sub->furl.'"><a title="'. utf8_decode( $sub->details->name)  .'" href="'.Section::host().$sub->path.Section::$extention.'">'.utf8_decode($sub->details->name).'</a></li>';
											}
										echo '</ul>';
									}										
								
							}
							echo '</li>';
						}	
					
					?>
				</ul>
		
			</div>
		</nav>
		<!--        END MENU -->
