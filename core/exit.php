<?php
    session_start();
    unset($_SESSION['user']['id']);
    unset($_SESSION['user']['email']);
    unset($_SESSION['user']['file']);
    unset($_SESSION['user']['full_name']);
    header('Location: ../Main_page.php');
