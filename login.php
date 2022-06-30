<html>
	<head>
		<title>Логин</title>
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
		<h1> Введите свои имя и пароль</h1>
		<form method="POST"  action="check_login.php">
			<input type="text" name="txtUser"/> <br />
			<input type="password" name="txtPwd" /> <br />
			<button>Вперед</button> <br />
		</form>
	</body>
</html>
