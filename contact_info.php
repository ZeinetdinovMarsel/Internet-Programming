<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <Link rel="stylesheet" href="styles/styles.css">
</head>

<body>
<div>
    <div class="head">
        <div class="headText">
            Контактная информация
        </div>
        <?php
        if($_COOKIE['user']==''):
    ?>
    <a href="userenter.php"><div class="user">
        Вход/Регистрация
    </div>
    </a>
    <?php else:?>
        <div class="username">Пользователь:<a href="userpage.php" class="username"><?=$_COOKIE['user']?></a> <a href="/exit.php">Выход</a></div>
    <?php endif;?>
    </div>
<div class="blockinf">
    <div class="icons">
        <div class="gmail">
            <div class="infotext">
                marsel.zeinetdinov@gmail.com
            </div>
        </div>
        <div class="mail">
            <div class="infotext">
                marsel.zeinetdinov@mail.ru
            </div>
        </div>
        <div class="viber">
            <div class="infotext">
                +7-(953)-984-92-88
            </div>
        </div>
    </div>
<div class="soc">
    <div class="line3text">
        Соц сети и прочее
        <div class="line3"></div>
    </div>
    <div class="socic">

        <tr>
            <td>
                    <a href="https://vk.com/blackboy1337"><div class="vk">
                        </div>
                    </a>
                    <a href="https://www.instagram.com/_.ha4._.truka4._/"><div class="inst">
                        </div>
                    </a>
            </td>
            <td>
                    <a href="https://steamcommunity.com/profiles/76561198259404726"><div class="steam">
                        </div>
                    </a>
                    <a href="https://github.com/ZeinetdinovMarsel"><div class="git">
                        </div>
                    </a>
            </td>
        </tr>

</div>
</div>        
</div>

</body>
</html>