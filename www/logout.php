<?php
require __DIR__ . '/auth.php';
setcookie('login', '', 0, '/');
setcookie('password', '', 0, '/');
$loginFromCookie = $_COOKIE['login'] ?? '';
$passwordFromCookie = $_COOKIE['password'] ?? '';

if (checkAuth($loginFromCookie, $passwordFromCookie)) {
    header('Location: /www/index.php');
}

?>