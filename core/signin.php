<?php
    session_start();
    $connect =  new mysqli('localhost','root','','registr' );
    $connect ->query( " SET NAMES 'utf8'");

    $login = trim($_POST['login']);
    $password = md5(trim($_POST['password']));

    $check = $connect->query("SELECT * FROM `user` WHERE `login` = '$login' ");
    $count = $check->num_rows;
    echo $count;