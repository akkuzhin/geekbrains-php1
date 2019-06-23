<?php
require __DIR__ . '/functions.php';

if (empty($_POST['login'] || empty($_POST['password']))) {
    header('Location: /5/index.html');
    exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (!checkLoginPassword($login, $password)) {
    header('Location: /5/index.html');
    exit;
}

login($login);
header('Location: /5/index.php');
exit;