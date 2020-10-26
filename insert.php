<?php
	$connect = mysqli_connect("127.0.0.1","root","","store");
	$text_zaprosa_vstavit = "INSERT INTO products (title, description, img, price) VALUES ('{$_GET["title"]}', '{$_GET["description"]}', '{$_GET["img"]}', '{$_GET["price"]}')";
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); //для ввода в таблицу
	header('Location: index.php');
?>