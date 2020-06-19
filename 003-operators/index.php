<?php

fwrite(STDOUT, 'Введите Ваше имя: ');
$name = trim(fgets(STDIN, 1024));
fwrite(STDOUT, 'Введите Вашу фамилию: ');
$lastName = trim(fgets(STDIN, 1024));
fwrite(STDOUT, 'Введите Ваше отчество: ');
$middleName = trim(fgets(STDIN, 1024));

$fullName = mb_convert_case("$lastName $name $middleName", MB_CASE_TITLE);
$fio = mb_convert_case(mb_substr($lastName, 0, 1) . mb_substr($name, 0, 1) . mb_substr($middleName, 0, 1), MB_CASE_UPPER);
$surnameAndInitials = mb_convert_case($lastName, MB_CASE_TITLE) . ' ' . mb_strtoupper(mb_substr($name, 0, 1)) . '.' . mb_strtoupper(mb_substr($middleName, 0, 1));

fwrite(STDOUT, $fullName . PHP_EOL);
fwrite(STDOUT, $fio . PHP_EOL);
fwrite(STDOUT, $surnameAndInitials . PHP_EOL);