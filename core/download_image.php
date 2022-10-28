<?php
    require 'database.php';
    if($_FILES['file']['name']) download();
    update();
