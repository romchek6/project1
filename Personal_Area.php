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
            <h1>Котики наше всё</h1>
        </div>
        <div class="open_cabinet">
            <p><?= $_SESSION['user']['email']?></p>
            <a href="core/exit.php" class="cab1" >Выйти из учётной записи</a>
        </div>
    </header>
    <div class="fon">
        <form action="core/download_image.php" method="post" enctype="multipart/form-data">
                <img class="img1" src="<?= $_SESSION['user']['file'] ?>" width="150" height="150"  alt="avatar">
            <label>Фото профиля</label>
            <input type="file" name="file" placeholder="Загрузите картинку">
            <button type="submit" >Загрузить</button>
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