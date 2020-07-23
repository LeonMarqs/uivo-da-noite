<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'db_uivo');


$connection = mysqli_connect(
  HOST,
  USER,
  PASSWORD,
  DB
) or die('Não foi possível conectar');
