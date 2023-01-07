<?php
error_reporting(0);	
session_start();

function getRandomWord($len = 5) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

$captcha = getRandomWord();
$_SESSION["captcha"] = $captcha;


$height = 35; //CAPTCHA image height
$width = 150; //CAPTCHA image width
$font_size = 24; 

$image_p = imagecreate($width, $height);
$graybg = imagecolorallocate($image_p, 245, 245, 245);
$textcolor = imagecolorallocate($image_p, 34, 34, 34);

imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, 'fonts/mono.ttf', $captcha);
//imagestring($image_p, $font_size, 5, 3, $ranStr, $white);
imagepng($image_p);

	
?>
