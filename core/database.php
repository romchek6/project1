<?php
    session_start();
    require 'connect.php';
    function redirect(){
         header('Location: ../registration.php ');
    exit();
    }

    function sign_up(){
        global $connect;
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

    }

    function sign_in(){
        global $connect;
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $check = $connect->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password' ");
        $count = $check->num_rows;
        if($count > 0){
            $user = $check->fetch_assoc();
//            $_COOKIE['user'] =[
//                "id" => $user['id'],
//                "full_name" => $user['full_name'],
//                "email" => $user['email'],
//                "file" => $user['file']
//            ];
            setcookie('id',$user['id'],0 ,'/');
            setcookie('full_name',$user['full_name'],0 ,'/');
            setcookie('email',$user['email'],0 ,'/');
            setcookie('file',$user['file'],0 ,'/');

            header('Location: ../Personal_Area.php ');
        } else {
            $_SESSION['error'] = 'Проверьте правильность введённых данных';
            header('Location: ../index.php ');
        }
    }
    function download(){
        global $connect;
        $id = $_SESSION['user']['id'];

        $path = 'uploads/' . time() . $_FILES['file']['name'];

        if(!move_uploaded_file($_FILES['file']['tmp_name'] , '../'. $path)){
            $_SESSION['error'] = 'ошибка загрузки';
            header('Location: ../Personal_Area.php');
        } else{
            $connect ->query("UPDATE `user` SET `file` = '$path' WHERE `id` = '$id'");
            $_SESSION['error'] = 'картинка загружена';
            header('Location: ../Personal_Area.php');
        }
    }
    function check_avatar()
    {
        global $connect;
        $id = $_SESSION['user']['id'];
        $check = $connect->query("SELECT `file` FROM `user` WHERE `id` = '$id' ");
        $count = $check->num_rows;
        if ($count > 0) {
            $user = $check->fetch_assoc();
            $_SESSION['user']['file'] = $user['file'];
        }
    }
