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

        <title>form</title>
    </head>

    <body>
        <div class="container">
            <div class="form-block col-md-offset-3 col-md-6">

                <?php require "../db.php"; ?>
                <!-- таблица информации о пользователе -->
                <div class="form-horizontal">
                    <div class="h1">Ваши данные</div>
                    <table class="table">

                        <tr class="table-active">
                            <td>Ваше имя</td>
                            <td><?php echo $_SESSION['logged_user']->firstname; ?></td>
                        </tr>

                        <tr>
                            <td>Ваша фамилия</td>
                            <td><?php echo $_SESSION['logged_user']->lastname; ?></td>
                        </tr>

                        <tr>
                            <td>Ваш email</td>
                            <td><?php echo $_SESSION['logged_user']->email; ?></tr>
                        </tr>
                        <tr></table>
                        <!-- выйти с аккаунта -->
                        <a href="logout.php">Выйти из аккаунта</a>

                    </div>
                </div>

            </body>

        </html>