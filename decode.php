<?php
require __DIR__ . "/vendor/autoload.php";
$filename = 'screenshot.png';
$qrcode = new Zxing\QrReader($filename);
$text = $qrcode->text(); //return decoded text from QR Code

echo $text;
?>

