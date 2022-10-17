<?php
    unset($_SESSION['user']);
    print_r($_SESSION['user']);
    header('Location: ../index.php');
