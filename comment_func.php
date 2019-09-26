<?php

/*Изменить данные на свои*/
$connect = mysqli_connect('localhost', 'db', '12019991', 'database') or die('<span class="text_text">Ошибка подключения к базе</span>'); //Подключение к базе данных

$name    = $_POST["user_name"];
$comment = $_POST["user_comment"];

mysqli_query($connect, 'INSERT INTO `comments` (`name`, `comment`, `date`) VALUES ("' . $name . '", "' . $comment . '", "' . date('Y-m-d H:i:s') . '")');
mysqli_close($connect);

header('Location: index.php');

?>