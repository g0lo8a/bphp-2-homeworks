<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="no">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-family: Monaco,sans-serif;">
<?php include 'tasks.php';
echo "Файл:  $fileName <br>Строка: $line";
echo "<hr>$strHeredoc<hr>";
echo "$fish рыбою сыта, а $homoSapiens {$homoSapiens}ом";
echo '<hr>';
echo '<h2>if..elsif..else</h2>';
ifElse($variable);
echo '<h2>switch-case</h2>';
switchCase($variable);
?>
</body>
</html>