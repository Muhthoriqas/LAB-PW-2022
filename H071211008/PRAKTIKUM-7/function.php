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

class Insert extends Connection{
  public function insert(){

    if (isset($_POST['submit'])) {
      if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['fakulltas'])) {
        if (!empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['alamat']) && !empty($_POST['fakultas']) ) {
          
          $nim = $_POST['nim'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $fakultas = $_POST['fakultas'];

          $query = "INSERT INTO mahasiswa (nim,nama,alamat,fakultas) VALUES ('$nim','$nama','$alamat','$fakultas')";
          if ($sql = $this->conn->query($query)) {
            echo "<script>alert('Simpan data sukses');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
          }else{
            echo "<script>alert('Simpan data gagal');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
          }

        }else{
          echo "<script>alert('empty');</script>";
          echo "<script>window.location.href = 'index.php';</script>";
        }
      }
    }
  }
}

class Fetch extends Connection {
  public function fetch(){
    $data = null;

    $query = "SELECT * FROM mahasiswa";
    if ($sql = $this->conn->query($query)) {
      while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
      }
    }
    return $data;
  }
}

class Delete extends Connection{
  public function delete($id_mhs){

    $query = "DELETE FROM mahasiswa 
              where id_mhs = '$id_mhs'";
    if ($sql = $this->conn->query($query)) {
      return true;
    }else{
      return false;
    }
  }
}

class FetchSingle extends Connection{
  public function fetch_single($id_mhs){
    $data = null;

    $query = "SELECT * FROM mahasiswa 
              WHERE id_mhs = '$id_mhs'";
    if ($sql = $this->conn->query($query)) {
      while ($row = $sql->fetch_assoc()) {
        $data = $row;
      }
    }
    return $data;
  }
}

class Edit extends Connection{
  public function edit($id_mhs){

    $data = null;

    $query = "SELECT * FROM mahasiswa 
              WHERE id_mhs = '$id_mhs'";
    if ($sql = $this->conn->query($query)) {
      while($row = $sql->fetch_assoc()){
        $data = $row;
      }
    }
    return $data;
  }
}

class Update extends Connection{
  public function update($data){

    $query = "UPDATE mahasiswa 
              SET nim='$data[nim]', 
                  nama='$data[nama]', 
                  alamat='$data[alamat]', 
                  fakultas='$data[fakultas]' 
              WHERE id_mhs='$data[id_mhs] '";

    if ($sql = $this->conn->query($query)) {
      return true;
    }else{
      return false;
    }
  }
}