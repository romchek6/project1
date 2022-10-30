<?php
    session_start();
    if($_COOKIE['id']) header('Location: ../Personal_Area.php ');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css1.css">
    <title>Регистрация</title>
</head>
<body>
<div class="regist"><h1 style = margin-top:20px  ">Регистрация</h1></div>
<div class="fon">
    <form action="core/signup.php" method="post">
        <label>Имя</label>
        <input type="text" name="first_name" value="<?= $_SESSION['first_name']?>" placeholder="Введите имя" >
        <label>Фамилия</label>
        <input type="text" name="last_name" value="<?= $_SESSION['last_name']?>" placeholder="Введите фамилию" >
        <label style="margin-bottom: 10px">Пол</label>
        <p style="font-size: 20px ">
            <input type="radio" name="gender" value="man"  > Мужчина
            <input type="radio" name="gender" value="woman" > Женщина
        </p>
        <label style="margin-top: 10px">Возраст</label>
        <input type="number" name="age" value="<?= $_SESSION['age'] ?>" placeholder="Введите возраст" >
        <label >Логин</label>
        <input type="text" name="login" value="<?= $_SESSION['login'] ?>" placeholder="Введите логин" >
        <label>Почтовый адрес</label>
        <input type="email" name="email" value="<?= $_SESSION['email'] ?>" placeholder="Введите почтовый адрес">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Повторите пароль</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
       <p class="pe">Уже есть аккаунт? - <a class="aw" href="index.php">Войдите</a></p>
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
