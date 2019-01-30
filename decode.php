<?php
require 'phpqrcode/phpqrcode.php';

$text = $argv[1];
$filename = 'screenshot.png';
QRcode::png($text, $filename, 1, 12, 1);

$item = [
    "items" => [[
		"type" =>  "file",
        "title" => $text,
        "subtitle" => "press Enter to copy",
        "arg" => $filename,
        "icon" => [
            "type" => "file",
            "path" => $filename
        ],
		"valid" => true,
    ]],
];

echo json_encode($item, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
?>

