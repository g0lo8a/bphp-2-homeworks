<?php
declare(strict_types=1);

header('Content-Type: text/txt');
header('Content-Disposition: attachment; filename="text.txt"');

$fileName = '../files/original.txt';
$file = fopen($fileName, 'wb+');
$text = $_GET['text'];
fwrite($file, $text);
readfile($fileName);