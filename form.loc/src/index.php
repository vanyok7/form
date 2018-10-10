<?php
  require "db.php";
?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- стили -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- /стили -->
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">

        <title>Главная</title>
    </head>

    <body>

        <div class="container">
            <div class="form-horizontal basic-block">

            <?php if(isset($_SESSION['logged_user']) ) : ?>
                <br>
                <div class="h3">Вы успешно вошли в кабинет</div>
                <a href="php-pages/profile.php">Просмотреть мою информацию!</a>
                <a href="php-pages/logout.php">Выйти</a>
            <?php else : ?>
                <div class="row btn-choose justify-content-center">

                  <div class="h3">Вы не авторизованы!</div>
                    <div class="h4">Войдите или зарегистрируйтесь</div>
                    <br>
                    <!-- ссылки -->
                    <a href="../php-pages/signin.php">Авторизация</a>
                    <a href="../php-pages/signup.php">Регистрация</a>

                    <?php endif; ?>
                </div>

            </div>
        </div>

    </body>

</html>

