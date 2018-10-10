// виход с аккаунта + переход на главную страницу
<?php
  require "../db.php";
  unset($_SESSION['logged_user']);
  header('Location: /');  
?>