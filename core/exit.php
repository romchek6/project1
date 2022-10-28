<?php
    session_start();
    setcookie('id',null, time() - 3600,'/');
    unset($_SESSION['user']['email']);
    unset($_SESSION['user']['file']);
    unset($_SESSION['user']['full_name']);
    header('Location: ../Main_page.php');
