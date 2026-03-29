<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';
$message = 'Всё в порядке';
if($login !== 'admin'){
    $message =  'Пользователь не найден!';
} else{
    if($password !== 'Pa$$w0rd'){
        $message =  'Неправильный пароль!';
    }
}

?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $message ?>
</p>
</body>
</html>