<?php
if(isset($_GET['sign']))
{
	$sign_number = $_GET['sign'];
}

$signs_name = array(
    1 => 'Aries',
    2 => 'Taurus',
    3 => 'Gemini',
    4 => 'Cancer',
    5 => 'Leo',
    6 => 'Virgo',
    7 => 'Libra',
    8 => 'Scorpio',
    9 => 'Sagittarius',
    10 => 'Capricorn',
    11 => 'Aquarius',
    12 => 'Pisces'
    );

print('<div class="title_section">');
print('<figure class="sign_symbol"><img src="img/signs/'.$sign_number.'.png" /></figure>');
print('<h2 class="sign_title">'.$signs_name[$sign_number].'</h2>');
print('</div>');
if(file_exists('signs_sources/textos/'.$sign_number.'.php'))
{
	include('signs_sources/textos/'.$sign_number.'.php');
}

?>