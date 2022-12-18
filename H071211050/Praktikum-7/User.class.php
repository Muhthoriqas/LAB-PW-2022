<?php
class User
{
    private $db;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }

    public function register($user_name, $user_email, $user_password)
    {
        try {
            $user_hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(user_name, user_email, user_password) VALUES(:user_name, :user_email, :user_password)";

            $query = $this->db->prepare($sql);

            $query->bindParam(":user_name", $user_name);
            $query->bindParam(":user_email", $user_email);
            $query->bindParam(":user_password", $user_hashed_password);

            $query->execute();
        } catch (PDOException $e) {
            array_push($errors, $e->getMessage());
        }
    }

    public function login($user_name, $user_email, $user_password)
    {
        try {
            $sql = "SELECT * FROM users WHERE user_name=:user_name OR user_email=:user_email LIMIT 1";

            $query = $this->db->prepare($sql);

            $query->bindParam(":user_name", $user_name);
            $query->bindParam(":user_email", $user_email);

            $query->execute();

            $returned_row = $query->fetch(PDO::FETCH_ASSOC);

            if ($query->rowCount() > 0) {
                if (password_verify($user_password, $returned_row['user_password'])) {
                    $_SESSION['user_session'] = $returned_row['user_id'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            array_push($errors, $e->getMessage());
        }
    }

    public function is_logged_in() {

        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function log_out() {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
}