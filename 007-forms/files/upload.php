<?php
declare(strict_types=1);
if ($_POST['file_name'] && $_FILES['file']) {
    $uploadDir = __DIR__ . '/upload_files/';
    $uploadName = trim(strip_tags($_POST['file_name'])) . '.' . basename($_FILES['file']['type']);
    $uploadFile = $uploadDir . $uploadName;
    $fileSize = round($_FILES['file']['size'] / 1000);

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    echo "<p>Файл размером <b>$fileSize КБ</b> загружен и сохранён под именем «<b>{$uploadName}</b>» в папку «<b>{$uploadDir}</b>»</p>";
    echo '<a href="../index.php">Загрузить ещё</a>';
} else {
    header('Location: ../index.php');
}
