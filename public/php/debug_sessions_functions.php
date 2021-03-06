<?php
define('LOGGED_IN_USER', 'logged_in_user');
function redirect($location)
{
    header("Location: $location");
    exit;
}
function isUserAuthenticated()
{
    return isset($_SESSION[LOGGED_IN_USER]);
}
function user()
{
    return $_SESSION[LOGGED_IN_USER];
}
function authenticate($username, $password)
{
    if ($username == 'guest' && $password == 'password') {
        $_SESSION[LOGGED_IN_USER] = $username;
        return true;
    }
    return false;
}
function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
function input($key, $default = '')
{
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
}
function clearSession()
{
    session_unset();
    session_regenerate_id(true);
}