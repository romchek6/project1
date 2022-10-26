<?php
    unset($_COOKIE['id']);
    unset($_COOKIE['email']);
    unset($_COOKIE['full_name']);
    unset($_COOKIE['file']);
    header('Location: ../Main_page.php');
