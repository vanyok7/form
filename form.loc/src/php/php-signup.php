<?php
  $data = $_POST;

  $errors = array();

  if ( isset($data['do_signup']) )
  {
    //проверки
    if( trim($data['firstname']) == '' )
    {
      $errors[] = 'Введите имя!';
    }
    if( trim($data['lastname']) == '' )
    {
      $errors[] = 'Введите фамилию!';
    }
    if( trim($data['email']) == '' )
    {
      $errors[] = 'Введите email!';
    }
    if(R::count('users', "email = ?", array($data['email']))>0)
    {
      $errors[] = 'Email уже существует!';
    }
    
    if( $data['password1'] == '' )
    {
      $errors[] = 'Введите пароль!';
    }
    if( $data['password2'] != $data['password1'] )
    {
      $errors[] = 'Пароли не совпадают!';
    }

    if ( empty($errors) )
    {
      //все ок, регистрируем
      $user = R::dispense('users');
      $user->firstname = $data['firstname'];
      $user->lastname = $data['lastname'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password2'],PASSWORD_DEFAULT);
      R::store($user);
      echo '<div class="luck">Вы успешно зарегестрированы!<br><a href="signin.php">Войти</a></div>';
    } else
    {
      echo '<div class="error">'.array_shift($errors).'</div>';
    }
  }
?>