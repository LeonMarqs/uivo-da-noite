<?php

class User {

  private $id;
  private $name;
  private $email;
  private $password;
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function __get($attr) {
    return $this->$attr;
  }

  public function __set($attr, $value) {
    $this->$attr = $value;
  }

  public function register() {

  }

  public function verifyUser() {

    $query = 
    " SELECT id, name, email, password
      FROM users 
      WHERE email = '{$this->email}' AND password = '{$this->password}'
    ";

    $result = mysqli_query($this->db, $query);
    $row = mysqli_num_rows($result);

    if($row > 0 && $row === 1) {
      return mysqli_fetch_assoc($result);
    }  
    else {
      header('Location: /login?error=noAuth');
    }

  }

}