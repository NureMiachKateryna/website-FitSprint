<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <style>
      .footer-b a {
  text-decoration: none;
  color: white;
  font-family:Inter;
  font-size:20px;
  magin:20px 0 0 0;
}

    </style>
</head>
<body>
    <div class="header-profile">
        <div class="profile-arrow">
            <a href="index.php"><img src="img/arrow-profile.png" alt="Back" /></a>
        </div>
      
        <div class="profile-logo">
            <img src="img/logo.jpg" alt="Logo" />
        </div>
      
    </div>
   
    <div class="profile-personal-inf">
        <div class="part1">
            <div class="profile-img-text">
                <div class="profile-avatar">
                    <img src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : 'img/avatar.png'; ?>" alt="Avatar" id="profileImage"/>
                </div>
                <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="profileImage" accept="image/*" onchange="document.getElementById('uploadForm').submit();" style="display: none;">
                    <a href="#" onclick="document.querySelector('[name=profileImage]').click(); return false;">Додати фото</a>
                </form>
            </div>

            <div class="profile-text">
                <div class="profile1">
                    <input placeholder="Ім'я Прізвище" type="text" class="name-surname" value="<?php echo isset($_SESSION['name']) && isset($_SESSION['surname']) ? $_SESSION['name'] . ' ' . $_SESSION['surname'] : ''; ?>" />
                
                </div>
                <div class="profile2">
                    <input placeholder="useremail@gmail.com" type="text" class="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" />
                  
                </div>
            </div>
        </div>
        <div class="personal-characteristics">
            <div class="char-text">
                <div class="char-img">
                    <img src="img/Group (1).png" alt="Char" />
                </div>
                <div class="char-title">
                    <p>Особисті характеристики:</p>
                </div>
            </div>
            <div class="char-inputs">
                <div class="char-inputs1">
                    <div class="number-input">
                        <input placeholder="Вага" type="number" class="weight" id="weight" />
                        <div class="arrow-up">▲</div>
                        <div class="arrow-down">▼</div>
                    </div>
                </div>
                <div class="char-inputs2">
                    <div class="number-input">
                        <input placeholder="Зріст" type="number" class="height" id="height" />
                        <div class="arrow-up">▲</div>
                        <div class="arrow-down">▼</div>
                    </div>
                </div>
            </div>
            <div class="profile-button-container">
                <button class="profile-button" onclick="saveProfile()">Зберегти</button>
            </div>
        </div>

        <div id="results" class="results">
          <br>
        </div>
    </div>

    <div class="main-information">
        <div class="title-inf">
          <br>
            <p>Поточний курс</p>
        </div>
        <div class="text-inf">
            <a href="paid-basic-course.php"><p>ПОСИЛАННЯ НА БАЗОВИЙ КУРС</p></a>
        </div>

        <div class="img-text">
            <div class="img1">
                <img src="img/profile-img.png" alt="Profile">
            </div>
            <div class="text">
                <p class="text1">Деталі курсу:</p>
                <hr>
                <div class="text-details">
                    <div class="detail">
                        <div class="img">
                            <img src="img/detail1.png" alt="Detail1">
                        </div>
                        <div class="t">
                            <p class="t1">Старт курсу: <br /> 23.03.2024</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="img">
                            <img src="img/detail2.png" alt="Detail2">
                        </div>
                        <div class="t">
                            <p class="t2">Кінець курсу: <br />23.03.2025</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="img">
                            <img src="img/detail3.png" alt="Detail3">
                        </div>
                        <div class="t">
                            <p class="t3">12 днів</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="img">
                            <img src="img/detail4.png" alt="Detail4">
                        </div>
                        <div class="t">
                            <p>Рівень складності: <br />для новачків</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-line"></div>
        <div class="footer-container">
            <div class="links">
                <a href="reset-password.php" class="link1">Змінити пароль</a>
                <a href="logout.php" class="link2">Вийти з профілю</a>
                <a href="delete_profile.php" class="link3">Видалити профіль</a>
            </div>
            <div class="footer-b">
               <a href="https://drive.google.com/file/d/1bYvcCq08vFLw0Z4CPwkzm9D3-VNpK9Ba/view?usp=sharing">Завантажити додаток</a>
            </div>
            <div class="logo-blue">
                <img src="img/logo-blue.jpg" alt="FitSprint Logo">
            </div>
         
        </div>
      
        <div class="footer-line"></div>
    </footer>

    <script>
        document.querySelectorAll('.number-input').forEach(function(container) {
            const input = container.querySelector('input[type="number"]');
            const arrowUp = container.querySelector('.arrow-up');
            const arrowDown = container.querySelector('.arrow-down');

            arrowUp.addEventListener('click', function() {
                input.stepUp();
            });

            arrowDown.addEventListener('click', function() {
                input.stepDown();
            });
        });

        function saveProfile() {
            const weight = document.getElementById('weight').value;
            const height = document.getElementById('height').value;

            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = `<div class="result-content"><p>Ваш зріст: ${height} см
            <br> Ваша вага: ${weight} кг</п></div>`;
          
        }
    </script>
</body>
</html>
