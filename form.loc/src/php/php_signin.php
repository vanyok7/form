<?php
       $data = $_POST;
       if (isset($data['do_login']) )
       {
        $errors = array();
        $user = R::findOne('users', 'email = ?', array($data['email']));
        if ( $user )
        {
           // логин существует
           if ( password_verify($data['password2'], $user->password) ) 
           {
             //все ок, логиним пользвателя
             $_SESSION['logged_user'] = $user;
             echo '<div class="luck">Вы авторизованы!<br><a href="/">Главная страница</a></div>';
 
           } else
           {
             $errors[] = 'Введите верный пароль!';
          }
 
        } else
         {
           $errors[] = 'пользователь не найден!';
         }
 
        if ( !empty($errors) )
        {
         echo '<div class="error">'.array_shift($errors).'</div>';
        } 
 
       }
?>