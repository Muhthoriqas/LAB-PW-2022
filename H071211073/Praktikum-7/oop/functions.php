<?php
// Di file ini kita membuat classnya atau OOPnya
include 'database.php'; // memanggil file database.php untuk membuat database dan tabel baru
class Crud { // Class ini berfungsi untuk CRUDnya kupindahkanji yang di crudTable.php codenya supaya jadi OOP ki
    public $succes;
    public $failed;

    function setsucces ($succes) {
        $this->succes = $succes; // untuk membuat sukses dan fail
    }
    function setfailed ($failed) {
        $this->failed = $failed;
    }

    function edit(mysqli $conn,$id,$nim,$nama,$alamat,$fakultas) {
        $queryUpdate = "UPDATE dataMahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', fakultas = '$fakultas' WHERE id = '$id'";
        mysqli_query($conn, $queryUpdate); // untuk edit dicari menggunakan id
    }

    function delete(mysqli $conn) {
        $id = $_GET['id'];
        $sql1 = "DELETE FROM dataMahasiswa WHERE id = '$id'";
        mysqli_query($conn, $sql1); // untuk mengdelete dicari menggunakan id
    }

    function select(mysqli $conn) {
        $sql2 = "select * from dataMahasiswa";
        return mysqli_query($conn, $sql2); // untuk mengambil data query dan mengreturn sebagai query
    }

    function insert(mysqli $conn,$nim,$nama,$alamat,$fakultas) {
        $queryInsert = " INSERT INTO dataMahasiswa(nim,nama,alamat,fakultas)
                        VALUES
                        ('$nim', '$nama', '$alamat', '$fakultas')
                        ";
        $q1 = mysqli_query($conn, $queryInsert);
        if($q1){
            $this->setsucces("Berhasil memasukkan data!");
        } else {
            $this->setfailed("NIM sudah ada!");
        };
    }
}

class Authentication {
    public $email;
    public $pass;
  
    function arrCon(string $sql, mysqli $conn) { // Fungsi ini berguna untuk mengubah query table menjadi array atau meng return jadi array
      $arr = [];
      $result = $conn->query($sql); // menjalankan query
      if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              array_push($arr, $row); // mendorong data atau memasukkan data kedalam array untuk setiap $row
          }
      }
      return $arr;
    }
  
    function login(mysqli $conn) {
      $this->email = $_POST['email'];
      $this->pass = $_POST['password'];
      $sql = "SELECT email FROM users WHERE email LIKE '$this->email'";
      $data = $this->arrCon($sql, $conn); // mengambil data untuk dijadikan patokan apakah email ini ada ?
  
      $sql = "SELECT `rank` FROM users WHERE email LIKE '$this->email'";
      $ranks = $this->arrCon($sql, $conn); // untuk mengambil rank dari email atau user

      if(isset($data[0])) { 
        $sql = "SELECT pass FROM users WHERE email LIKE '$this->email'"; 
        $data = $this->arrCon($sql, $conn); // Mengambil data untuk nanti di cek apakah untuk email ini passwordnya sudah benar ?
        if($data[0]['pass'] == $this->pass) { // mengecek passwordnya bagaimana
            session_start(); // memulai session agar bisa masuk nanti ke crudTable.php
            $_SESSION['users'] = $ranks[0]['rank'];
            echo 'success';
            header("Location: crudTable.php"); // pergi atau rediricet ke crudTable kalau berhasil login
        }
      }
    }
    function register(mysqli $conn) {
        $this->email = $_POST['email'];
        $this->pass = $_POST['password'];
    
        $sql = "SELECT email FROM users WHERE email LIKE '$this->email'";
        $data = $this->arrCon($sql,$conn); // mengambil data untuk nanti di test apakah email sudah terdaftar atau tidak
        if (!$data) { // mengcek apakah nilai data yang dikembalikan ada kalau tidak ada maka kita ubah nilainya jadi test
            $data[0]['email'] = 'test'; // karna akan menghasilkan error jika nilainya null jadi kita set jadi test
        }

        if ($data[0]['email'] == $this->email) { // pengecekan akan error jika nilainya null
            echo 'Email Sudah Terdaftar';
        } else {
            $sql = "INSERT INTO `users` (`email`, `pass`, `rank`) VALUES ('$this->email','$this->pass', 'member')";
            $conn->query($sql); // kalau berhasil maka kita akan masukkan ke dalam data dan pergi ke login (index.php)
            header("Location : crudTable.php");
        }
        return null;
    }
}

$auth = new Authentication(); // membuat authentication
$crud = new Crud(); // untuk membuat crud
?>