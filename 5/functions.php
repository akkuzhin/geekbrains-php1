<?php

function checkLoginPassword($login, $password)
{
    $users = ['oleg'=>'123', 'ivan'=>'qwerty'];
    return isset($users[$login]) && $password == $users[$login];
}
/*
assert(true == checkLoginPassword('oleg', 123));
assert(false == checkLoginPassword('ivan', 1234));
*/

function login($login)
{
    setcookie('auth', $login, time()+3600);
}

function isUser()
{
    return isset($_COOKIE['auth']);
}

function getUser()
{
    return $_COOKIE['auth'];
}

function logout()
{
    unset($_COOKIE['auth']);
    setcookie('auth', '', time()-3600);

}
