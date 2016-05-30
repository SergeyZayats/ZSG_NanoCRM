<html>
<head>
<title>Восстановление пароля</title>
<style>

	body {
		background-color: #959595;
		font-size: 18px;
	}

	div#login_form {
		top: 50%; /* Отступ в процентах от верхнего края окна */
		left: 50%; /* Отступ в процентах от левого края окна */
		width: 450px; /* Ширина блока */
		height: 250px; /* Высота блока */
		position: absolute; /* Абсолютное позиционирование блока */
		margin-top: -150px; /* Отрицательный отступ от верхнего края страницы, должен равняться половине высоты блока со знаком минус */
		margin-left: -250px; /* Отрицательный отступ от левого края страницы, должен равняться половине высоты блока со знаком минус */
		text-align: center;
		background-color: #82E95F;	
	}

  	input {
  		background-color: white;
  	}

  	a {
  	text-decoration: none;
  	color: #1A1DE5;	
  	padding-left: 40px;
  	text-align: left;
  	}


</style>

</head>

<body>

<div id='login_form'>

<h3>Восстановление пароля</h3>

<div>

<form method='post' action=''>
<br><br>
<input type='email' name='email' placeholder='Введите электронную почту' size='30'/> 
<br><br>
<input type="submit" value='Восстановить пароль'>
<br><br>
</form>

</div>

<div class="link_auth_form">
<a href="login">Войти</a>
<a href="registration">Регистрация</a>
</div>

</div>

</body>
</html>