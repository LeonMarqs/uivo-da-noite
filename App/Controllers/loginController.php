<?php

include 'App/Connection.php';
require_once 'App/Models/User.php';

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

/* Login verification */
if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'action=login') {

  if(empty($email) || empty($password)) {
    header('Location: /login?error=empty');
    exit();
  }
  
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

  $name = mysqli_real_escape_string($connection, $_POST['name']);

  if($email != '' || $password != '' || $name != '') {
    
    //valores menores que o determinado
    if(strlen($name) < 5 || strlen($password) < 8) {
      header('Location: /register?error=minLength');
    }

    //email invalido
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('Location: /register?error=invalidEmail');
    }

    else {

      $user = new User($connection);
    
      $user->__set('email', $email);
      $user->__set('password', $password);
      $user->__set('name', $name);

      if($user->verifyUserByEmail()) {
        $user->register();
        header('Location: /register?success=true');
      }

    }

  } else {
    header('Location: /register?error=empty');
  }

  

}
