<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

			<?php
				if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
					$score = 0;

					$userAnswer = $_GET["userAnswer1"];
					if($userAnswer == "сон" || $userAnswer == "сноведение"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer2"];
					if($userAnswer == "морской"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer3"];
					if($userAnswer == "шахматный" || $userAnswer == "мертвый"){
						$score++;
					}

					echo "Вы угадали " . $score . " загадок";
				}
				
			?>

				<form method="GET">
					<p>Что можно увидеть с закрытыми глазами?</p>
					<input type="text" name="userAnswer1">

					<p>Какой болезнью никто не болеет на суше?</p>
					<input type="text" name="userAnswer2">

					<p>Какой конь не ест овса?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="submit">
				</form>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Ilia Lugovoi
<div>


</body>
</html>