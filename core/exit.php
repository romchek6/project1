<?php
    session_start();
    unset($_SESSION['user']);
    header('Location: ../Main_page.php');
