<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"马大哈";
$im = imagecreatetruecolor(640, 852);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,640,852);
imagedestroy($bg);
$black = imagecolorallocate($im, 50, 50, 50);
$text = $name;
$font = '../font/msyh.ttf';
imagettftext($im, 15, 0, 110, 330, $black, $font, $text);


imagejpeg($im);
imagedestroy($im);
?>