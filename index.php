<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <Link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div>
<div class="head">
     
    <div class="headText">
    Harambe Dev
    </div>
    <?php
        if($_COOKIE['user']==''):
    ?>
    <a href="userenter.php" class="user"><div class="user">
        Вход/Регистрация
    </div>
    </a>
    <?php else:?>
        <div class="username">Пользователь:<a href="userpage.php" class="username"><?=$_COOKIE['user']?></a> <a href="/exit.php">Выход</a></div>
    <?php endif;?>
</div>
<div class="mainBlockin">
<div id='mouseTarget'>
</div>
<div class="line">
</div>
<div class="buttons">
<a href="about_me.php" class="buttontext"><div class="button1">
        <div class="buttontextlight">
            Обо мне
        </div>
</div>
</a>

<a href="contact_info.php" class="buttontext">
    <div class="button1">
        <div class="buttontext">
            Кон&#8203;такт&#8203;ная<br>Ин&#8203;фор&#8203;ма&#8203;ция
        </div>
        </div>
</a>

<a href="mldm.php" class="buttontext"><div class="button1">
    <div class="buttontext">
            Ла&#8203;бо&#8203;ра&#8203;тор&#8203;ные ра&#8203;бо&#8203;ты МЛИДМ
        </div>
</div>
</a>

<a href="galerey.php" class="buttontext"><div class="button1">
    <div class="buttontextlight">
        Галерея
    </div>
</div>
</a>
</div>
</div>
</div>
<script type="text/javascript" src="scripts/indexscripts.js"></script>
</body>

</html>