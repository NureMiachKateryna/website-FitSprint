<?php 
session_start();
require 'databases/users.php';
$users = new Users();
$users->open();
class ResetPassword {
    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function updatePassword() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['psw']) ? $_POST['psw'] : '';
            if (empty($email) || empty($password)) {
                echo "Fill in all the fields";
                return;
            
            }
            $this->conn->select_db("fitSprintUsers");
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $this->conn->query($sql);
            if ($result->num_rows === 0) {
                ?>
                <div class="text">
                  <?php echo "User not found"; ?>  
                </div>
                <?php
                
                return;
            }
         
            $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
            $result = $this->conn->query($sql);
            if ($result === TRUE) {
                header("Location: index.php");
                exit;
            } else {
                echo "Failed to update password";
            }
        }
    }
}
$resetPassword = new ResetPassword($users->conn);
$resetPassword->updatePassword();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset-password.css">
</head>
<body>
 <main>
    <section class="header-login">
        <div class="logo">
            <img src="img/logo.jpg" alt="">
        </div>
        <div class="header-icon">
            <a href="index.php"><img src="img/cross.png" alt=""></a>
        </div>
    </section>

    <section class="main-login">
<div class="title">
<p>Зміна паролю</p>
</div>

<form action="#" method="POST">
    <input type="text" placeholder="Ел. Пошта" name="email" required>
    <input type="password" placeholder="Новий пароль" name="psw" required>
    <button type="submit" class="resetbtn">Оновити пароль</button>
</form>

    </section>
 </main>
</body>
</html>