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
		
	</head>
	
	<body>
		<a href="index1.html">Домашняя страница</a>
		<h1>Калькулятор на чистом PHP</h1>
		<?php
			if (isset($_REQUEST["txt1"])) {
				$x = $_REQUEST["txt1"];
				$y = $_REQUEST["txt2"];
				$z = $x + $y;
			}else{
				$x = ""; $y = ""; $z = "";
			}
		?>
		<form>
			<input type="text" name="txt1" autocomplete="off" value="<?=$x?>" /> <br />
			<input type="text" name="txt2" autocomplete="off" value="<?=$y?>"/> <br />
			<button>+</button> <br />
			<input type="text" readonly="on" value="<?=$z?>"/> 
		</form>
		<textarea></textarea>
	</body>
</html>
