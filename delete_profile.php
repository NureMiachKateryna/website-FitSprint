<?php 
session_start();
require 'databases/users.php';

class DeleteProfile {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function delete() {
        $this->conn->select_db("FitSprintUsers");
        $email = $_SESSION['email'];
        $sql = "DELETE FROM users WHERE email = '$email'";
        
        if (mysqli_query($this->conn, $sql)) {
            if (mysqli_affected_rows($this->conn) > 0) {
                session_destroy();
                header("Location: index.php");
                exit;
            } else {
                echo "Користувача не вдалося видалити";
            }
        } else {
            echo "Помилка: " . mysqli_error($this->conn);
        }
    }
}

$deleteProfile = new DeleteProfile($users->conn);
$deleteProfile->delete();
?>
