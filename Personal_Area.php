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
    <div class="fon">
    </div>
    <footer>
        <div id="clock"></div>
        <script src="js/time.js"></script>
    </footer>
</body>
</html>