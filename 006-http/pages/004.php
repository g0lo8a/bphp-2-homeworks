<?php
declare(strict_types=1);

session_start();

echo '<h1>Произошёл редирект на страницу 004.php</h1>';
echo "<h2>Страница 003.php была открыта {$_SESSION['count']} раз</h2>";
echo '<a href="../index.php">Назад</a>';