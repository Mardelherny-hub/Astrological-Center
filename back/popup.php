<?php
//error_reporting(E_ALL); 
//ini_set("display_errors", 1); 
//ini_set("display_startup_errors", 1); 


include "../php/HX_Fmwk/load.php";

class Index extends AppPageController {

  public function onLoad() {	
  	 ob_clean();  	
  	 $updated = false;
  if(count($_POST) > 0){	
	//echo "RECORD";
	//var_dump($_POST);/*die;	*/
	$updated = true;
	SET_content::setCustomPopup($_POST);	
	}
	
	$content = GET_content::getCustomPopup();
  	
  	include('includeshome/popupform.php');
  }

 
  
  public function onUnLoad() {}
  
}
Controller::load("Index");

/*

DROP TABLE IF EXISTS customPopup;
CREATE TABLE customPopup (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `activo` INT( 1 ) NOT NULL,
   `bordercolor` VARCHAR(10) NOT NULL,
  `delay` INT(10) NOT NULL,
  `titulo` VARCHAR(1000) NULL,
  `fontsize` INT(10) NOT NULL,
  `texto` TEXT NULL,
  `textoboton` VARCHAR(500) NULL, 
  `link` VARCHAR(2000) NULL ,
  `isblank` INT(1) NOT NULL,
  `mostrarfooter` INT( 1 ) NOT NULL,
  PRIMARY KEY(id)
)ENGINE=MyIsam DEFAULT CHARSET=UTF8;


INSERT INTO `customPopup` (`id`,`activo`,`bordercolor`,`delay`, `titulo`,`fontsize`, `texto`, `textoboton`, `link`,`isblank`,`mostrarfooter`) VALUES 
(1, 1, '810102', 1000, '', 40, '&lt;p&gt;&lt;span style=&quot;box-sizing: border-box; font-family: ''Open Sans'', sans-serif; display: block; color: rgb(128, 0, 0); font-size: 20px;&quot;&gt;&lt;strong style=&quot;box-sizing: border-box;&quot;&gt;Psicolog&amp;iacute;a Arquet&amp;iacute;pica de Carl G. Jung&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: ''Open Sans'', sans-serif; font-size: 14px; line-height: 20px;&quot;&gt;La Psique (Totalidad). El Ego. Inconsciente Personal: Complejos. Inconsciente Colectivo. Arquetipos: Personaje - Anima / Animus - La Sombra - El S&amp;iacute; Mismo. La Libido como Energ&amp;iacute;a Ps&amp;iacute;quica. La Intuici&amp;oacute;n. Canalizaci&amp;oacute;n de Energ&amp;iacute;a. Iniciaci&amp;oacute;n (Individualizaci&amp;oacute;n). Mitos. Simbolismo y Sue&amp;ntilde;os. Self (El S&amp;iacute; Mismo). Principio de Sincronicidad. Psicolog&amp;iacute;a y Alquimia.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;box-sizing: border-box; font-family: ''Open Sans'', sans-serif; display: block; color: rgb(128, 0, 0); font-size: 20px;&quot;&gt;&lt;strong style=&quot;box-sizing: border-box;&quot;&gt;Cuarto Camino (Gurdjieff, Ouspensky, Nicoll)&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: ''Open Sans'', sans-serif; font-size: 14px; line-height: 20px;&quot;&gt;Yoes. La ausencia de unidad en el Hombre. Observaci&amp;oacute;n de s&amp;iacute;. No identificaci&amp;oacute;n. El Recuerdo de S&amp;iacute;. El Yo Real. Los Cuatro Estados de Consciencia - Sue&amp;ntilde;o - Vigilia - Consciencia de S&amp;iacute;Consciencia Objetiva. Los Niveles de Consciencia. Las Funciones Psicol&amp;oacute;gicas y los Centros: Intelectual &amp;ndash; Emocional &amp;ndash; Vegetativo &amp;ndash;Motriz. Emociones negativas. Transformaci&amp;oacute;n, No represi&amp;oacute;n. No Consideraci&amp;oacute;n interna y Consideraci&amp;oacute;n externa. El Rayo de Creaci&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;box-sizing: border-box; font-family: ''Open Sans'', sans-serif; display: block; color: rgb(128, 0, 0); font-size: 20px;&quot;&gt;&lt;strong style=&quot;box-sizing: border-box;&quot;&gt;Budismo - Psicolog&amp;iacute;a Oriental&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: ''Open Sans'', sans-serif; font-size: 14px; line-height: 20px;&quot;&gt;Corrientes Mahayana y Hinayana. Qu&amp;eacute; es la Meditaci&amp;oacute;n. La Iluminaci&amp;oacute;n. Siddartha Gautama, El Buda. Desarrollo hist&amp;oacute;rico del Budismo. Naturaleza y funci&amp;oacute;n del hombre seg&amp;uacute;n el Budismo. Muerte, Renacer y Karma. El sufrmiento y la condici&amp;oacute;n humana. Soluci&amp;oacute;n al problema del sufrimiento. Teor&amp;iacute;a de la Reencarnaci&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;bs-callout bs-callout-danger&quot; style=&quot;margin:20px 20px 10px;&quot;&gt;\r\n&lt;h3&gt;Reserv&amp;aacute; tu lugar&lt;/h3&gt;\r\n&lt;span style=&quot;display:block;&quot;&gt;4981-7935 / 2442&lt;/span&gt; &lt;span style=&quot;display:block;&quot;&gt; 15-3895-6730&lt;/span&gt; &lt;span style=&quot;display:block;&quot;&gt;&lt;a href=&quot;mailto:info@aztlan.com.ar&quot;&gt; info@aztlan.com.ar&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;\r\n', 'Más Info', 'http://www.aztlan.com.ar/curso-de-psicologia-transpersonal/curso-de-verano.html', 0, 0);

*/

?>
