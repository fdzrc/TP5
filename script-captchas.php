<?php
session_start();
$chaine = '23456789ABCDEFGHJKLMNOPQRSTUVWXYZ';

$image = imagecreatefrompng('Images/fond.png');

$color1 = imagecolorallocate($image, 255,105,180);

$font= 'Fonts/RAGE.ttf'; 
function getCode($length, $chars) {
	$code = null;
	for ($i=0; $i < $length; $i++ )
	{
		$code .= $chars { mt_rand( 0, strlen($chars) - 1 ) };
	}
	return $code;

	$_SESSION['code'];}
	

$code = getCode(5, $chaine);
$_SESSION['code'] = $code;


$char1 = substr($code,0,1);
$char2 = substr($code,1,1);
$char3 = substr($code,2,1);
$char4 = substr($code,3,1);
$char5 = substr($code,4,1);


imagettftext($image, 28, -10, 0, 37, $color1, $font, $char1);
imagettftext($image, 28, 20, 37, 37, $color1, $font, $char2);
imagettftext($image, 28, -35, 55, 37, $color1, $font, $char3);
imagettftext($image, 28, -15, 88, 37, $color1, $font, $char4);
imagettftext($image, 28, -15, 128, 37, $color1, $font, $char5);


header('Content-Type: image/png');

imagepng($image);

imagedestroy($image);

?>


