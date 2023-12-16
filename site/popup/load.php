<?php
header('Content-Type: text/html; charset=ISO-8859-1'); 
echo file_get_contents($_GET['file'].".php","r");


?>