<?php

include 'App/Connection.php';
require_once 'App/Models/User.php';

if(empty($_POST['email']) || empty($_POST['password'])) {
  header('Location: /login?error=empty');
  exit();
}

/* Login verification */
if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'action=login') {
  
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  
  $user = new User($connection);
  
  $user->__set('email', $email);
  $user->__set('password', $password);

  if($result = $user->verifyUser()) {
    session_start();

    $_SESSION['id'] = $result['id'];
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];

    header('Location: /');
  };

};

/* Register */
if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'action=register') {

  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $name = mysqli_real_escape_string($connection, $_POST['name']);

  $user = new User($connection);
  
  $user->__set('email', $email);
  $user->__set('password', $password);
  $user->__set('name', $name);

  if($user->verifyUserByEmail()) {
    $user->register();
    header('Location: /register?success=true');
  }

}
