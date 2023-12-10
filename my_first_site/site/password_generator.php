<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var letter = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']

		function readInt(){
			return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("password").innerHTML = text;
		}

		function getRandomNumber(max){
			return Math.round(Math.random() * max);
		}

		function generateText(letters, length){
			var text = "";
			for(var i = 0; i < length; i++){
				var n = getRandomNumber(letters.length - 1);
				text = text + letters[n];
			}

			return text
		}

		function generate(){
			var length = readInt();
			var password = generateText(letter, length);
			write(password);
		}

	</script>
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор случайных паролей</h1>

			<div class="box">

				<p id="info">Укажите длину пароля <br><br>
				<input type="text" id="userAnswer"> <br>
				<h3 id="password"></h3>
				<a href="#" onClick="generate();">Генерировать</a>				
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