<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styles.css">
    
</head>

<body>
<div class="head">
     
    <div class="headText">
    Вход/Регистрация
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

<div class="cont">
    
<div class="userImage">
    <?php
    $login=$_COOKIE['login'];
    $mysql= new mysqli('localhost','root','root','register-bd');
    $result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
    $user=$result->fetch_assoc();
    $image=base64_encode($user['image']);
   
    ?>
    <img src="data:image/jpeg;base64, <?php echo $image?>" alt="">
</div>
<div class="userinfo">
    Имя: <?=$_COOKIE['user']?><br>
    Логин: <?=$_COOKIE['login']?><br>
    admin: 
    <?php if($_COOKIE['admin']==0):?>
        Нет
    <?php else:?>
        Да
    <?php endif;?>
</div>
</body>

</html>