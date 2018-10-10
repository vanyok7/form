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

        <title>Вход</title>
    </head>

    <body>
        <div class="container">
            <div class="form-block col-md-offset-3 col-md-6">

            <?php require "../db.php"; 
                  require "../php/php_signin.php"?>
                <form class="form-horizontal" action="signin.php" method="POST">
                    <!-- заголовок -->
                    <span class="form-horizontal heading">АВТОРИЗАЦИЯ</span>
                    <!-- почта -->
                    <div class="form-group">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="<?php echo @$data['firstname']; ?>"
                            placeholder="Email">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <!-- пароль -->
                    <div class="form-group help">
                        <input
                            type="password"
                            class="form-control"
                            name="password2"
                            placeholder="Пароль">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="do_login" class="btn btn-default">ВОЙТИ</button>

                    </div>
                    <div class="href">
                        Не зарегестрированы?
                        <a href="signup.php">Зарегестрироваться!</a>
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>