<html>
	<head>
		<title>Ответ</title>
		<meta charset="utf-8" />
		<style>
			input, button {
				margin: 6px;
			}
			
		</style>
			
	</head>
	<body>
		<form>
			<h2>Ваша заявка рассмотрена!</h2>
			<?php 

					$x = $_REQUEST["num1"];
					$y = $_REQUEST["num2"];
					$result = $x + $y;
					
					echo("Результат сложения: $result");

			?>
		</form>
	</body>
</html>