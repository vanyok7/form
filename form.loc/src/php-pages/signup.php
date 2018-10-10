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
        <link rel="stylesheet" href="../css/style.css">
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
        <!-- /стили -->
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">

        <title>Регистрация</title>
    </head>

    <body>
        <div class="container">
            <div class="form-block col-md-offset-3 col-md-6">

            <?php 
    require "../db.php";
    require "../php/php-signup.php";
    ?>

                <form class="form-horizontal" action="signup.php" method="POST">
                    <!-- заголовок -->
                    <span class="form-horizontal heading">РЕГИСТРАЦИЯ</span>
                    <!-- имя -->
                    <div class="form-group">
                        <input
                            type="text"
                            name="firstname"
                            class="form-control"
                            value="<?php echo @$data['firstname']; ?>"
                            placeholder="Имя">
                        <i class="fa fa-user"></i>
                    </div>
                    <!-- фамилия -->
                    <div class="form-group">
                        <input
                            type="text"
                            name="lastname"
                            class="form-control"
                            value="<?php echo @$data['lastname']; ?>"
                            placeholder="Фамилия">
                        <i class="fa fa-user"></i>
                    </div>
                    <!-- почта -->
                    <div class="form-group">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="<?php echo @$data['email']; ?>"
                            placeholder="E-mail">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <!-- пароль -->
                    <div class="form-group">
                        <input
                            type="password"
                            class="form-control"
                            name="password1"
                            value="<?php echo @$data['password1']; ?>"
                            placeholder="Новый пароль">
                        <i class="fa fa-lock"></i>
                    </div>
                    <!-- пароль2 -->
                    <div class="form-group">
                        <input
                            type="password"
                            class="form-control"
                            name="password2"
                            value="<?php echo @$data['password2']; ?>"
                            placeholder="Повторите пароль">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <!-- кнопка -->
                        <button type="submit" name="do_signup" class="btn btn-default">Зарегестрироваться</button>
                        <!-- перейти на регистрацию -->
                    </div>
                    <div class="href">
                        Зарегестрированы?
                        <a href="signin.php">Войдите!</a>
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>