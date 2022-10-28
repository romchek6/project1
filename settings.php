<?php
    session_start();
    require 'core/database.php';
    if(!$_COOKIE['id']){
        header('Location: ../Main_page.php');
    }
    check_SESSION();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css1.css">

    <title>Личный кибинет</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="Main_page.php">
            <img src="image/1801287.svg" width="80" height="80">
        </a>
    </div>
    <div class="Name">
        <h1>Котики</h1>
    </div>
    <?php
    require_once 'Elements/cabinet.php'
    ?>
</header>
<div class="fon1">
    <form action="core/download_image.php" method="post" enctype="multipart/form-data">
        <?php
        if(!$_SESSION['user']['file'] && $_SESSION ['user']['gender'] =='man'){?>
            <img class="img1" src="uploads/вектор-значка-бизнесмена-мужчины-изображение-профиля-аватар-мужской-182095609.jpg" width="250" height="250" alt="avatar">
        <?php }  else if(!$_SESSION['user']['file'] && $_SESSION ['user']['gender'] =='woman'){?>
            <img class="img1" src="uploads/иллюстрация-вектора-аватары-женщины-носят-оранжевую-ткани-аватар-176114949.jpg" width="250" height="250" alt="avatar">
            <?php
        } else{
        ?>
            <img class="img1" src="<?=$_SESSION['user']['file']?>" width="250" height="250" alt="avatar">
        <?php } ?>

<!--        <div class="fon2">-->
            <div class="input__wrapper">
                <input  type="file" name="file" id="input__file" class="input input__file">
                <label for="input__file" class="input__file-button">
                    <span class="input__file-icon-wrapper"><img class="input__file-icon" src="image/menu/1459070.svg" alt="Выбрать файл" width="25"></span>
                    <span class="input__file-button-text">Выберите изображение</span>
                </label>
            </div>
<!--            <button style="margin-left: 20px" class="submit" type="submit" >Загрузить</button>-->
<!--        </div>-->
        <h2 style="align-self: center">Изменение данных</h2>
        <label>ФИО</label>
        <input type="text" name="full_name1" value="<?= $_SESSION['user']['full_name'] ?>" placeholder="Введите ФИО" >
        <label style="margin-bottom: 10px">Пол</label>
        <p style="font-size: 20px ">
            <input type="radio" name="gender1" value="man" > Мужчина
            <input type="radio" name="gender1" value="woman" > Женщина
        </p>
        <label style="margin-top: 10px">Возраст</label>
        <input type="number" name="age1" value="<?= $_SESSION['user']['age'] ?>" placeholder="Введите возраст" >
        <label>Почтовый адрес</label>
        <input type="email" name="email1" value="<?= $_SESSION['user']['email'] ?>" placeholder="Введите почтовый адрес">
        <button class="submit" type="submit" >Изменить</button>
        <?php
        if ($_SESSION['error'])
        {
            echo '<p class="me">' .$_SESSION['error']. '</p>';
        }
        unset($_SESSION['error']);
        ?>
    </form>
</div>
<footer>
    <div id="clock"></div>
    <script src="js/time.js"></script>
</footer>
</body>
</html>
