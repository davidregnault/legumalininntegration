<?php
require_once('include/requires.inc.php');


#session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );

}

if(!empty($_COOKIE))
{

    setcookie('PHPSESSID', false, -1, '/');
    setcookie('id', '', -1);
    setcookie('mail', '', -1);
    setcookie('name', '', -1);
    setcookie('password', '', -1);
    setcookie('pseudo', '', -1);
    setcookie('surname', '', -1);
    setcookie('statut', '', -1);
    header('Location:login.php');
}
elseif(!empty($_SESSION))
{
    unset($_SESSION);
    $_SESSION['id'] = '';
    $_SESSION['prenom'] = '';
    header('Location:login.php');
}
else
{
    header('Location:index.php');
    $_SESSION['flashMessage'] = flashMessage('error');
}

session_destroy();