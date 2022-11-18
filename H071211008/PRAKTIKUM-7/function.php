<?php
session_start();

class Connection{
  public $host = "127.0.0.1:3308";
  public $user = "root";
  public $password = "";
  public $db_name = "tugas";
  public $conn;

  public function __construct(){
    try{
      $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name); 
    }
    catch(Exception $e){
      echo "connection failed" . $e->getMessage();
    }
  }
}

class Register extends Connection{
  public function registration($name, $username, $email, $password, $confirmpassword){
    $duplicate = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      return 10;
      // username/email sudah digunakan
    }
    else{
      if($password == $confirmpassword){
        $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
        mysqli_query($this->conn, $query);
        return 1;
        // registrasi berhasil
      }
      else{
        return 100;
        // password salah
      }
    }
  }
}

class Login extends Connection{
  public $id;
  public function login($usernameemail, $password){
    $result = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $this->id = $row["id"];
        return 1;
        // Login sukses
      }
      else{
        return 10;
        // password salah
      }
    }
    else{
      return 100;
      // Username belum regis
    }
  }

  public function idUser(){
    return $this->id;
  }
}

class Select extends Connection{
  public function selectUserById($id){
    $result = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE id = $id");
    return mysqli_fetch_assoc($result);
  }
}
