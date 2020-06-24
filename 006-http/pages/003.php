<?php
declare(strict_types=1);
session_start();
$count = $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
echo "<h2>Эта страница была открыта {$_SESSION['count']} раз</h2>";
echo '<a href="../index.php">Назад</a>';
if($count % 3 === 0){
    header('Location: 004.php');
}