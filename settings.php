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
    <?php
         require 'Elements/header.php';
    ?>
<div class="fon1">
    <form action="core/download_image.php" method="post" enctype="multipart/form-data">
            <img class="img1" src="<?=$_SESSION['user']['file']?>" width="250" height="250" alt="avatar">
            <div class="input__wrapper">
                <input  type="file" name="file" id="input__file" class="input input__file">
                <label for="input__file" class="input__file-button">
                    <span class="input__file-icon-wrapper"><img class="input__file-icon" src="image/menu/1459070.svg" alt="Выбрать файл" width="25"></span>
                    <span class="input__file-button-text">Выберите изображение</span>
                </label>
            </div>
            <script src="js/file_count.js"></script>
        <h2 style="align-self: center">Изменение данных</h2>
        <label>Имя</label>
        <input type="text" name="first_name" value="<?= $_SESSION['user']['first_name'] ?>" placeholder="Введите имя" >
        <label>Фамилия</label>
        <input type="text" name="last_name" value="<?= $_SESSION['user']['last_name'] ?>" placeholder="Введите фамилию" >
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
