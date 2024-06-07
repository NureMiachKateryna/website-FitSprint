<?php 
 require 'databases/users.php';
 $users = new Users();
$users->open();
class Login{
    protected $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function check(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['psw']) ? $_POST['psw'] : '';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            ?>
            <div class="check-text">
            <?php 
            echo "Неправильний формат електронної пошти";
            ?>
            </div>
            <?php
            return;
        }
        if (empty($email) || empty($password)) {
            ?>
            <div class="check-text">
            <?php 
            echo "Заповніть всі поля!";
            ?>
            </div>
            <?php
            return;
        }
        else{
            if ($this->conn) {
                $this->conn->select_db("fitSprintUsers");
                $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                $result = $this->conn->query($sql);
                if($result->num_rows > 0){
                    $user = $result->fetch_assoc();
                    session_start();
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['surname'] = $user['surname'];
                    header("Location: profile.php");
                    exit;
                }else{
                    ?>
                    <div class="check-text">
                    <?php 
                    echo "Такого користувача не існує";
                    ?>
                    </div>
                    <?php
                }
            }else{
                echo "Помилка підключення до бази даних";
            }
            }
        }
        
    }
}
$login = new Login($users->conn);
$login->check();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        .check-text{
            color:white;
            font-family:Inter;
            font-size:16px;
            margin: 10px;
            text-align:center;
        }
    </style>
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
<p>Вхід</p>
</div>

<form action="#" method="POST">
    <input type="text" placeholder="Ел. Пошта" name="email" required>
    <input type="password" placeholder="Пароль" name="psw" required>
    <button type="submit" class="loginbtn">Увійти</button>
</form>
    </section>
 </main>
</body>
</html>