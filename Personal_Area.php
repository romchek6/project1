<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location: ../index.php ');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/css2.css">

    <title>Личный кибинет</title>
</head>
<body>
<header>
    <div class="open_cabinet">
        <a href="core/exit.php" class="cab1" >Выйти из учётной записи</a>
    </div>
</header>
</body>
</html>