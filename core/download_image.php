<?php
    session_start();
    $connect =  new mysqli('localhost','root','','registr' );
    $connect ->query( " SET NAMES 'utf8'");
    $id = $_SESSION['user']['id'];

    $path = 'uploads/' . time() . $_FILES['file']['name'];

   if(!move_uploaded_file($_FILES['file']['tmp_name'] , '../'. $path)){
       $_SESSION['error'] = 'ошибка загрузки';
       header('Location: ../Personal_Area.php');
   } else{
       $connect ->query("UPDATE `user` SET `file` = '$path' WHERE `id` = '$id'");
       header('Location: ../Personal_Area.php');
       $_SESSION['error'] = 'картинка загружена';
   }



