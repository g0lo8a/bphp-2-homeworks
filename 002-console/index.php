<?php
fwrite(STDOUT, 'Введите делимое: ');
$input = trim(fgets(STDIN, 1024));

while (!is_numeric($input)) {
    fwrite(STDERR, 'Введите, пожалуйста, число: ');
    $input = trim(fgets(STDIN, 1024));
}

echo 'Введите делитель: ';
$input2 = trim(fgets(STDIN, 1024));

while (!is_numeric($input2) || $input2 === '0') {
    if ($input2 === '0') {
        fwrite(STDERR, 'На 0 делить нельзя!!!' . PHP_EOL);
    }
    fwrite(STDERR, 'Введите, пожалуйста, число: ');
    $input2 = trim(fgets(STDIN, 1024));
}

fwrite(STDOUT, "$input / $input2 = " . $input / $input2);
die;