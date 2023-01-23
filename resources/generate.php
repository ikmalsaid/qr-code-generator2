<?php
require_once 'qrlib.php';

// Get form input and sanitize
$text = filter_var($_GET['text'], FILTER_SANITIZE_STRING);
$color = filter_var($_GET['color'], FILTER_SANITIZE_STRING);
$size = 250;

// Create QR code image
QRcode::png($text, "qrcode.png", "L", $size, 2, false, 0xFFFFFF, 0x000000);

// Set the content type header
header('Content-Type: image/png');

// Output image with specified color
$img = imagecreatefrompng("qrcode.png");
$color = imagecolorallocate($img, hexdec(substr($color,0,2)), hexdec(substr($color,2,2)), hexdec(substr($color,4,2)));
imagefill($img, 0, 0, $color);
imagepng($img);
imagedestroy($img);
