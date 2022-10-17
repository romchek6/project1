<?php
    session_start();
    $connect =  new mysqli('localhost','root','','registr' );
    $connect ->query( " SET NAMES 'utf8'");
    function redirect(){
        header('Location: ../registration.php ');
        exit();
    }


    $full_name = $_POST['full_name'];
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    $_SESSION['full_name'] = $full_name;
    $_SESSION['login'] = $login;
    $_SESSION['email'] = $email;

    $check = $connect->query("SELECT * FROM `user` WHERE `login` = '$login' ");
    $count = $check->num_rows;
    $check1 = $connect->query("SELECT * FROM `user` WHERE `email` = '$email' ");
    $count1 = $check1->num_rows;
    if(strlen($full_name)< 2) {
        $_SESSION['error'] = 'Введите ФИО';
        redirect();
    } else if(strlen($login)<4) {
        $_SESSION['error'] = 'Некорректный логин';
        redirect();
    } else if( $count > 0) {
        $_SESSION['error'] = 'Учётная запись с таким логином уже зарегистрирована';
        redirect();
    } else if($count1 > 0) {
        $_SESSION['error'] = 'Учётная запись с такой почтой уже зарегистрирована';
        redirect();
    }else if(strlen($password)<6){
        $_SESSION['error'] = 'Минимальная длина пароля 6 символов';
        redirect();
    } else if ( $password!=0 && $password === $password_confirm){
        $password = md5($password);
        $connect->query("INSERT INTO `user` ( `login`, `password`, `email`, `full_name` ) VALUES ( '$login', '$password', '$email', '$full_name')");
        $_SESSION['error'] = 'Регистрация прошла успешно!';
        unset($_SESSION['full_name']);
        unset($_SESSION['login']);
        unset($_SESSION['email']);
        header('Location: ../index.php ');
    } else{
        $_SESSION['error'] = 'Пароли не совпадают';
        redirect();
    }

