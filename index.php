<?php
    session_start();
    if($_SESSION['user']){
       header('Location: ../Personal_Area.php ');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css1.css">

    <title>Вход</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="#">
            <img src="image/1801287.svg" width="80" height="80">
        </a>
    </div>
    <div class="Name">
        <h1>Котики наше всё</h1>
    </div>
<!--    --><?php
//    if($_SESSION['user']){
//        echo '<div class="open_cabinet"> <a href="core/exit.php" class="cab1">Выйти</a> <a href="Personal_Area.php" class="cab2">Личный кабинет</a> </div> ';
//    }else{
//        echo '<div class="open_cabinet"> <a href="index.php" class="cab1">Вход</a> <a href="registration.php" class="cab2">Регистрация</a> </div> ';
//    }
//    ?>
</header>
<div class="fon">
    <form action="core/signin.php" method="post">
            <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин" >
            <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
        <div class="block">
            <a class="ap" href="registration.php">Создать аккаунт</a>
            <a class="aq" href="#">Забыли пароль?</a>
        </div>
        <?php
        if ($_SESSION['error'])
        {
            echo '<p class="me1">' .$_SESSION['error']. '</p>';
        }
        unset($_SESSION['error']);
        ?>
        <div class="block">
            <a class="ae" href="Main_page.php">Главная</a>
        </div>
    </form>
</div>
<footer>
    <div id="clock"></div>
    <script src="js/time.js"></script>
</footer>
</body>
</html>