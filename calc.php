<?php
	session_start();

	//Фактически, здесь реализована авторизация
	if (!isset($_SESSION["user"]))  {
		echo '<meta http-equiv="refresh" content="3; url=login.php" />';
		die("Требуется логин! Вы будете перенаправлены на страницы входа");
	}
?>

<html>
	<head>

		<title>Калькулятор</title>
		<meta charset="utf-8" />
		
		<style>
			input, button{
				width: 150px;
				margin: 5px;
				text-align: center;
			}
		</style>
		
		<script>
			function plus() {
				var x, y, z;
				x = parseInt(document.getElementById("txt1").value);
				y = parseInt(document.getElementById("txt2").value);
				z = x + y;
				document.getElementById("txt3").value = z;
			}
		</script>
	</head>
	
	<body>
		<a href="index1.html">Домашняя страница</a>
		<h1>Калькулятор на чистом JS</h1>
		<input type="text" id="txt1" autocomplete="off" /> <br />
		<input type="text" id="txt2" autocomplete="off"/> <br />
		<button onclick="plus();">+</button> <br />
		<input type="text" id="txt3" readonly="on" /> 
	</body>
</html>
