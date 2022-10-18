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
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
 <div>
     <h1><?= $_SESSION['user']['full_name'] ?></h1>
     <h1><?= $_SESSION['user']['email'] ?></h1>
 </div>
<form action="core/exit.php" method="post">
    <button type="submit">Выйти из учётной записи?</button>
</form>
</body>
</html>