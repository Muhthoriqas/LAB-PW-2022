<?php
session_start();

class Connection{
  public $host = "localhost";
  public $user = "root";
  public $pass = "";
  public $db = "php";
  public $koneksi;

  public function __construct(){
    $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
  }
}

class Register extends Connection{
  public function registration($name, $username, $email, $password, $confirmpassword){
    $duplicate = mysqli_query($this->koneksi, "select email from tb_user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      return 10;
      // Username or email has already taken
    }
    else{
      if($password == $confirmpassword){
        $query = "insert into tb_user VALUES('', '$name', '$username', '$email', '$password')";
        mysqli_query($this->koneksi, $query);
        return 1;
        // Registration successful
      }
      else{
        return 100;
        // Password does not match
      }
    }
  }
}

class Login extends Connection{
  public $id;
  public function login($usernameemail, $password){
    $result = mysqli_query($this->koneksi, "select * from tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $this->id = $row["id"];
        return 1;
        // Login successful
      }
      else{
        return 10;
        // Wrong password
      }
    }
    else{
      return 100;
      // User not registered
    }
  }

  public function idUser(){
    return $this->id;
  }
}
?>

