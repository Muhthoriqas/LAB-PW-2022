<?php

session_start();

//Membuat objek koneksi
class connection
{
    public $dbhost = "localhost";
    public $dbuser = "root";
    public $dbpass = "";
    public $dbname = "form_db";

    public function __construct()
    {
        //make a connection with pdo
        $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
    }
}
//Membuat objek registrasi
class registration extends connection
{
    public function registration($username, $password)
    {
        $check = $this->conn->prepare("SELECT * FROM `user` WHERE username = :username");
        $check->bindParam(":username", $username);
        $check->execute();
        $result = $check->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return 10;
            //username telah diambil
        } else {
            $insert = $this->conn->prepare("INSERT INTO `user` (username, password) VALUES (:username, :password)");
            $insert->bindParam(":username", $username);
            $insert->bindParam(":password", $password);
            $insert->execute();
            return 1;
        }
    }
}


//Membuat objek login
class login extends connection
{
    public $id;
    public function login($username, $password)
    {
        $sql = "SELECT * FROM `user` WHERE `username` = :username AND `password` = :password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute(array(":username" => $username, ":password" => $password));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $row['id'];
        if ($stmt->rowCount() > 0) {
            return 100;
        } 
        // else {
            // return 100;
        // }
    }

    public function idUser()
    {
        return $this->id;
    }
}

//Membuat objek select
class select extends connection
{
    public function select($id)
    {
        $sql = "SELECT * FROM `user` WHERE `id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}
