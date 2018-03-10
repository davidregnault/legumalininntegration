<?php

    require_once('includes/requires.inc.php');

    if (!empty($_POST) && !empty($_POST['login']) && !empty($_POST['password']))
    {
        extract($_POST);

        if (!empty($login))
        {
            $req = selectOne('users', 'login', $login);
            if ($req)
            {
                $pass_verif = password_verify($password, $req['password']);

                if ($login == $req['login'] && $pass_verif === true) {

                    # TODO: La variable $_SESSION['cookie'] est créée depuis le bandeau des cookies
                    $_SESSION['cookie'] = null;
                    #unset($_SESSION);
                    sessionOrCookie($req);

                    header('Location:index.php');
                }
                else
                {
                    $_SESSION['flashMessage'] = flashMessage('incorrect');
                    header('Location:login.php');
                }
            }
            elseif(!$req)
            {
                $_SESSION['flashMessage'] = flashMessage('incorrect');
                header('Location:login.php');
            }
        }
    }
    else
    {
        $_SESSION['flashMessage'] = flashMessage('empty');
        header('Location:login.php');
    }