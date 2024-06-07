<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitSprint</title>
    <link rel="stylesheet" href="css/advanced-course.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo.jpg">
        </div>
        <nav class="menu">
            <ul>
              <li><a href="index.php">ГОЛОВНА СТОРІНКА</a></li>
              <li><a href="aboutUs.php">ПРО НАС</a></li>
              <?php 
              if(isset($_SESSION['email'])){
                echo '<li><a href="profile.php">ПРОФІЛЬ</a></li>';
              }else{
            
              ?>
              <li><a href="login.php">ВХІД</a></li>
              <li><a href="registration.php">РЕЄСТРАЦІЯ</a></li>
              <?php   }?>
            </ul>
          </nav>
    </header>

    <main>
        <section class="course-container">
            <div class="course">
                <h1>ПРОСУНУТИЙ КУРС</h1>
                <p class="rating">⭐ <span style="color: #FFCB2B;">10/10</span> <span
                        style="color: white; font-size: smaller;">(8 відгуки про курс)</span></p>
                <div class="course-details">
                    <div class="icon-info">
                        <img src="img/calendar.png">
                        <p>12 днів</p>
                    </div>
                    <div class="icon-info">
                        <img src="img/group.png">
                        <p>Участь у потоці</p>
                    </div>
                    <div class="icon-info">
                        <img src="img/money-bag.png">
                        <p>Не безкоштовно</p>

                    </div>
                </div>

                <p>Продвинутий курс розроблений для тих, хто вже має досвід у сфері здорового способу життя та фітнесу і
                    шукає ще більших результатів. На цьому курсі учасники отримають вдосконалені стратегії харчування,
                    розширену програму фізичної активності, глибший аналіз прогресу та індивідуальну підтримку від
                    експертів у галузі здоров'я та тренерства. Цей курс розроблений для тих, хто прагне досягнути вищих
                    стандартів у схудненні та підтримці здорового способу життя.
                </p>
            </div>
            <div class="course-register">
                <h2 style="color: white;">Вартість курсу:
                    <h3 style="color: blue; display: inline;">1399 ₴</h3>
                </h2>
                <?php
                   if(!isset($_SESSION['email'])){
                
                  
                ?>
                <p><a href="login.php"><em>Авторизуйтесь</a></em>, щоб придбати</p>
                <button><a href="registration.php" style="text-decoration: none; color: white;">Зареєструватися</a></button>
                <?php 
                }else{
                    $userEmail = $_SESSION['email'];
                    ?>
                        <a id="purchase-link" href="https://secure.wayforpay.com/button/beaf5c0c08cff" style="display:inline-block!important;background:#2B3160 url('https://s3.eu-central-1.amazonaws.com/w4p-merch/button/bg6x2.png') no-repeat center right;background-size:cover;width: 256px!important;height:54px!important;border:none!important;border-radius:14px!important;padding:18px!important;text-decoration:none!important;box-shadow:3px 2px 8px rgba(71,66,66,0.22)!important;text-align:left!important;box-sizing:border-box!important;" onmouseover="this.style.opacity='0.8';" onmouseout="this.style.opacity='1';"><span style="font-family:Verdana,Arial,sans-serif!important;font-weight:bold!important;font-size:14px!important;color:#ffffff!important;line-height:18px!important;vertical-align:middle!important;">Купити</span></a>
                    <a id="course" href="paid-advanced-course.php" style="display:none;color:blue;text-decoration:underline;">Перейти до курсу</a>
             
               <?php
                }
                
                ?>
                <h4 style="color: white;">Цей курс включає:</h4>
                <ul>
                    <li><img src="img/calendar1.png"> 12 днів</li>
                    <li><img src="img/hourglass.png"> Термін доступу 1 рік з дати купівлі</li>
                    <li><img src="img/time.png"> Коли будете навчатися: у будь-який день
                        у будь-який час</li>
                    <li><img src="img/level-up.png"> Рівень складності: для профі</li>
                    <li><img src="img/gift.png"> Бонуси для всіх учнів</li>
                    <li><img src="img/live-chat.png"> Технічна підтримка: у робочий час, чат у месенджері,
                        електронна пошта, телефон</li>
                    <li><img src="img/padlock.png"> Доступ: після оплати</li>
                </ul>
            </div>
        </section>
        <section class="course-info">
            <h2>Що ви дізнаєтеся?</h2>
            <div class="course-info-columns">
                <ul class="course-info-left">
                    <li><img src="img/check.png"> Оптимізація харчування для максимального ефекту</li>
                    <li><img src="img/check.png"> Розробка інтенсивних тренувальних програм</li>
                    <li><img src="img/check.png"> Стратегії подолання плато</li>
                </ul>
                <ul class="course-info-right">
                    <li><img src="img/check.png"> Глибший аналіз тіла та складу жиру</li>
                    <li><img src="img/check.png"> Індивідуальна підтримка та консультації</li>
                </ul>
            </div>
            <h3>ПРО КУРС</h3>

            <p>Продвинутий курс з схуднення - це інтенсивна та глибока програма, призначена для тих, хто вже має досвід
                у сфері здорового харчування та фізичної активності і прагне досягнути ще більших результатів у своєму
                схудненні та покращенні фізичної форми. Основні аспекти курсу включають в себе:</p>
            <ul>
                <br>
                <li>Продвинуті тренувальні методи: Учасники досліджують різноманітні техніки тренувань, включаючи HIIT,
                    силові тренування, функціональний тренінг та інші, щоб максимізувати спалення калорій та підвищити
                    фізичну форму.</li>
                <br>
                <li>Ефективні стратегії схуднення: Учасники вивчають різні стратегії схуднення, включаючи методи
                    подолання плато, оптимізацію метаболізму, збільшення енерговитрат та підвищення волі до досягнення
                    цілей.</li>
                <br>
                <li>Глибокий аналіз прогресу: Учасники навчаються використовувати продвинуті методи аналізу прогресу,
                    включаючи вимірювання тіла, аналіз складу жиру та ваговий контроль, щоб ефективно відстежувати свої
                    досягнення.</li>
                <br>
                <li>Індивідуальна підтримка та консультації: Учасники отримують індивідуальні поради від фахівців у
                    галузі харчування, фітнесу та психології, а також підтримку та мотивацію для розв'язання будь-яких
                    труднощів та досягнення своїх цілей.
                </li>
            </ul>

            <p>Цей курс розроблений для тих, хто прагне зробити крок уперед у своєму схудненні та покращити свій стан
                здоров'я та фізичну форму на новому рівні.</p>
        </section>
    </main>

    <footer>
        <div class="footer-line"></div>
        <div class="footer-content">
            <div class="logo-blue">
                <img src="img/logo-blue.jpg" alt="FitSprint Logo">
            </div>
            <div class="contact-info">
                <div class="address">
                    <p><img src="img/placeholder.png" alt="Address Icon"> Площа Визволення 3А, Київ, Україна, 10001</p>
                </div>
                <div class="phones">
                    <p><img src="img/telephone.png" alt="Phone Icon"> +380 965 348 512</p>
                    <p><img src="img/printer.png" alt="Phone Icon"> +380 966 777 452</p>
                </div>
                <div class="social-media">
                    <a
                        href="https://www.facebook.com/people/Course-Fitsprint/pfbid08d1rzB3iAdqaBTNqSzCKsf7p95TFLAxpfmLs9PgoihoE5M2ZHZ19v1Wy9pGHji6rl/"><img
                            src="img/communication.png"></a>
                    <a href="#"><img src="img/twitter.png"></a>
                    <a href="#"><img src="img/linkedin.png"></a>
                    <a href="#"><img src="img/video.png"></a>
                    <a href="https://www.instagram.com/fitsprint4/"><img src="img/instagram.png"></a>
                    <a href="#"><img src="img/social.png"></a>
                    <a href="#"><img src="img/pinterest.png"></a>
                </div>
            </div>
        </div>
        <div class="footer-links">
            <a href="aboutUs.php">ПРО НАС</a>
            <a href="#">КОНТАКТИ</a>
            <a href="#">СЛУЖБА ДОПОМОГИ</a>
            <a href="#">ПОЛІТИКА КОНФІДЕНЦІЙНОСТІ</a>
        </div>
        <div class="footer-line"></div>
    </footer>
    <script>
        const userEmail = "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>";
        document.getElementById('purchase-link').addEventListener('click', function() {
            localStorage.setItem('coursePurchased', userEmail);
            document.getElementById('course').style.display = 'inline';
            document.getElementById('purchase-link').style.display = 'none';
        });
        window.addEventListener('load', function() {
            if (localStorage.getItem('coursePurchased') === userEmail) {
                document.getElementById('course').style.display = 'inline';
                document.getElementById('purchase-link').style.display = 'none';
            } else {
                document.getElementById('course').style.display = 'none';
                document.getElementById('purchase-link').style.display = 'inline-block';
            }
        });
    </script>
</body>

</html>