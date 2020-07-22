<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/' :
    require __DIR__ . '/views/index.phtml';
  break;
  
  case '' :
    require __DIR__ . '/views/index.phtml';
  break;
  
  case '/login' :
    require __DIR__ . '/views/login.phtml';
  break;
  
  default:
  http_response_code(404);
  require __DIR__ . '/views/404.phtml';
  
break;
}
