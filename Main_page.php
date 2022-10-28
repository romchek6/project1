<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css1.css">
    <title>Главная</title>
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
<div class="fon">

</div>
    <footer>
        <div id="clock"></div>
        <script src="js/time.js"></script>
    </footer>
</body>
</html>