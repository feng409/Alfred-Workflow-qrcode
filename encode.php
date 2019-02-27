<?php
require __DIR__ . '/phpqrcode/phpqrcode.php';

$text = $argv[1];
$filename = 'screenshot.png';
QRcode::png($text, $filename, 1, 12, 1);

$item = [
    "items" => [
        "title" => $text,
        "subtitle" => "press Enter to copy",
        "arg" => "",
        "icon" => [
            "type" => "",
            "path" => " "
        ],
    ],
    "valid" => true,
    "text" => [
        "copy" => "",
        "largetype" => "test"
    ]
];

echo json_encode($item);
?>

