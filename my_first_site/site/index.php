<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Личный сайт студента GeekBrains</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<div class="content">
		<?php
			include "menu.php";
		?>

		<h1>Личный сайт студента GeekBrains</h1>

		<div class="center">
			<img src="img/DSC08931.JPG">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Ilia Lugovoi</i>. Предлагаю вашему внимаю мой сайт, на котором вы сможете сыграть в игры</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>Представляю Вашему вниманию: <br><br>
				<a href="index.php">Главная</a>
				<a href="puzzle.php">Загадки</a>
				<a href="guess.php">Угадайка</a> <br>
				<a href="guess2.php">Угадайка на двоих</a>
				<a href="password_generator.php">Генератор паролей</a>
			</p>
		</div>
		</div>
		</div>

		<div class="footer">
			<p>Copyright &copy; <?php echo date("Y");?> Ilia Lugovoi</p>
		<div>


	</body>
</html>