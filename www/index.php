<?php
$login = !empty($_GET['login']) ? $_GET['login'] : 'логин не передан!';
$password = !empty($_GET['password']) ? $_GET['password'] : 'пароль не передан!';
?>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>
<form action="/www/login.php" method="post">
    <label>
        Логин <input type="text" name="login">
    </label>
    <br>
    <label>
        Пароль <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>