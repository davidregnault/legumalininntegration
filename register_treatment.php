<?php

    require_once('include/requires.inc.php');

    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmation']))
    {
        extract($_POST);
    }
    else
    {
        $_SESSION['flashMessage'] = flashMessage('empty');
        header('Location:register.php');
    }

    if (!empty($login))
    {
        $uniqueLogin = selectOne('users', 'login', $login);

        if ($uniqueLogin == false )
        {
            $loginOk = $login;
        }
        elseif ($uniqueLogin)
        {
            $_SESSION['flashMessage'] = flashMessage('used');
            header('Location:register.php');
        }
    }
    if (!empty($email)) {
        $uniqueEmail = selectOne ( 'users', 'email', $email );

        if ($uniqueEmail == false) {
            $emailOk = $email;
        } elseif ($uniqueEmail) {
            $_SESSION[ 'flashMessage' ] = flashMessage ( 'email_used' );
            header ( 'Location:register.php' );
        }
    }
    if ($password == $confirmation)
    {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    } elseif ($password !== $confirmation)
    {
        $_SESSION[ 'flashMessage' ] = flashMessage ( 'password' );
        header ( 'Location:register.php' );
    }

    if (!empty($loginOk) && !empty($pass_hash) && !empty($emailOk)) :

        try
        {
            $req = $pdo->prepare('INSERT INTO users(id, name, surname, login, password, email, avatar, statut, created_at) VALUES(NULL, :name, :surname, :login, :password, :email, :avatar, :statut, NOW())');
            $req->bindValue(':name', $name);
            $req->bindValue(':surname', $surname);
            $req->bindValue(':login', $login);
            $req->bindValue(':password', $pass_hash);
            $req->bindValue(':email', $emailOk);
            $req->bindValue(':avatar', $avatar);
            $req->bindValue(':statut', $statut, PDO::PARAM_INT);

            $insert = $req->execute();

            #dd($insert);

            if ($insert)
            {
                header('Location:index.php');
            }
            else
            {
                throw new Exception('Une erreur est survenue !');
            }
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            $_SESSION['flashMessage'] = flashMessage('error');
            header('Location:register.php');
        }
    endif;
