<?php 
session_start();
$check = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'databases/users.php';
    $database = new Users();
    $database->open();
    $database->conn->select_db('FitSprintUsers');
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    if (!preg_match("/^[a-zA-Zа-яА-ЯёЁєЄіІїЇґҐ'-]+$/u", $name) || !preg_match("/^[a-zA-Zа-яА-ЯёЁєЄіІїЇґҐ'-]+$/u", $surname)) {
      ?>
      <div class="check-text">
      <?php 
        echo "Неправильно введено ім'я або прізвище\n";
        ?>
        </div>
        <?php
       $check = true;

    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ?>
        <div class="check-text">
        <?php 
        echo "Неправильний формат електронної пошти\n";
        ?>
        </div>
        <?php
        $check = true;

    }
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $database->conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        ?>
      <div class="check-text">
      <?php 
         echo "Користувач з такою поштою вже існує\n";
         ?>
         </div>
         <?php
          $check = true;
   
         
    }
    if (!$check) {
    $sql = "INSERT INTO users (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
    
    if ($database->conn->query($sql) === TRUE) {
      header("Location:index.php");
      exit;
    } else {
        echo "Помилка: " . $sql . "<br>" . $database->conn->error;
    }
}
    $database->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registration.css">
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
    <section class="header-registration">
        <div class="logo">
            <img src="img/logo.jpg" alt="">
        </div>
        <div class="header-icon">
            <a href="index.php"><img src="img/cross.png" alt=""></a>
        </div>
    </section>

    <section class="main-registration">
<div class="title">
<p>Реєстрація</p>
</div>
<div class="registartion-text">
<div class="text">
    <p>Вже є обліковий запис?</p>
</div>
<div class="link">
    <a href="login.php">Увійти</a>
</div>
</div>

<form action="#" method="POST">
    <input type="text" placeholder="Ім'я" name="name" required>
    <input type="text" placeholder="Прізвище" name="surname" required>
    <input type="text" placeholder="Ел. Пошта" name="email" required>
    <input type="password" placeholder="Пароль" name="psw" required>
    <button type="submit" class="registerbtn">Зареєструватися</button>
</form>
<div class="lines">
    <hr class="first">
    <hr class="second">
</div>
    </section>

 </main>
 
</body>
</html>