<?php

if($_COOKIE['id']){?>
    <div class="open_cabinet">  <div class="dropdown">
            <div class="cab2"><?= $_SESSION['user']['email'] ?></div>
            <div class="dropdown-content">
                <a href="Personal_Area.php"> <img src="image/menu/login.svg" alt="" width="25" height="25"> <p>Кабинет</p></a>
                <a href="settings.php"><img src="image/menu/44104.png" alt="" width="25" height="25"> <p>Настройка</p> </a>
                <a href="help.php"> <img src="image/menu/41943.png" alt="" width="25" height="25"> <p>Помощь</p> </a>
                <a href="core/exit.php"><img src="image/menu/402718.png" alt="" width="25" height="25"> <p>Выйти</p></a>
            </div>
        </div></div>
    <?php
}else {?>
    <div class="open_cabinet"> <a href="index.php" class="cab1">Вход</a> <a href="registration.php" class="cab2">Регистрация</a> </div>
    <?php
}
?>