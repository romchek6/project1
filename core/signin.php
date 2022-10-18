<?php
    session_start();
    $connect =  new mysqli('localhost','root','','registr' );
    $connect ->query( " SET NAMES 'utf8'");

    $login = trim($_POST['login']);
    $password = md5(trim($_POST['password']));

    $check = $connect->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password' ");
    $count = $check->num_rows;
    if($count > 0){
        $user = $check->fetch_assoc();
        $_SESSION['user'] =[
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "email" => $user['email']
        ];
        header('Location: ../Personal_Area.php ');
    } else {
        $_SESSION['error'] = 'Проверьте правильность введённых данных';
        header('Location: ../index.php ');
    }
