<?php

$request = $_SERVER['REQUEST_URI'];

$request = explode('?',$request);

switch ($request[0]) {
  case '/' :
    require __DIR__ . '/App/Views/index.phtml';
  break;
  
  case '' :
    require __DIR__ . '/App/Views/index.phtml';
  break;
  
  case '/login' :
    require __DIR__ . '/App/Views/login.phtml';
  break;

  case '/register' :
    require __DIR__ . '/App/Views/register.phtml';
  break;

  case '/logout' :
    require __DIR__ . '/App/Controllers/logoutController.php';
  break;

  case '/authenticate' :
    require __DIR__ . '/App/Controllers/loginController.php';
  break;
  
  default:
  http_response_code(404);
  require __DIR__ . '/App/Views/404.phtml';
  
break;
}
