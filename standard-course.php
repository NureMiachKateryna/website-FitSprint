<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitSprint</title>
    <link rel="stylesheet" href="css/standard-course.css">
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
                <h1>СТАНДАРТНИЙ КУРС</h1>
                <p class="rating">⭐ <span style="color: #FFCB2B;">9/10</span> <span
                        style="color: white; font-size: smaller;">(2 відгуки про курс)</span></p>
                <div class="course-details">
                    <div class="icon-info">
                        <img src="img/calendar.png">
                        <p>5 днів</p>
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

                <p>Стандартний курс надає учасникам комплексний підхід до досягнення здорової ваги. Заснований на
                    фізичній активності та психологічній підтримці, курс включає індивідуалізовані плани тренувань,
                    моніторинг прогресу та регулярну підтримку від фахівців у галузі здоров'я та фітнесу. Він
                    розроблений для тих, хто прагне не лише схуднути, але й створити здоровий та збалансований спосіб
                    життя на тривалий термін.</p>
            </div>
            <div class="course-register">
                <h2 style="color: white;">Вартість курсу:
                    <h3 style="color: blue; display: inline;">699 ₴</h3>
                </h2>
                <?php
                   if(!isset($_SESSION['email'])){
                
                  
                ?>
                <p><a href="login.php"><em>Авторизуйтесь</a></em>, щоб придбати</p>
                <button><a href="login.php" style="text-decoration: none; color: white;">Зареєструватися</a></button>
                <?php 
                }else{
                    $userEmail = $_SESSION['email'];
                    ?>
                    <a id="purchase-link" href="https://secure.wayforpay.com/button/bd3f50e490220" style="display:inline-block!important;background:#2B3160 url('https://s3.eu-central-1.amazonaws.com/w4p-merch/button/bg6x2.png') no-repeat center right;background-size:cover;width: 256px!important;height:54px!important;border:none!important;border-radius:14px!important;padding:18px!important;text-decoration:none!important;box-shadow:3px 2px 8px rgba(71,66,66,0.22)!important;text-align:left!important;box-sizing:border-box!important;" onmouseover="this.style.opacity='0.8';" onmouseout="this.style.opacity='1';"><span style="font-family:Verdana,Arial,sans-serif!important;font-weight:bold!important;font-size:14px!important;color:#ffffff!important;line-height:18px!important;vertical-align:middle!important;">Купити</span></a>
                        <a id="course" href="paid-standard-course.php" style="display:none;color:white;text-decoration:underline;">Перейти до курсу</a>   
                        <br /><br /> <a id="payment" href="payment.html" style="display:none;color:blue;text-decoration:underline;">Переглянути статус оплати</a>
<?php
                }
                ?>
                <h4 style="color: white;">Цей курс включає:</h4>
                <ul>
                    <li><img src="img/calendar1.png"> 5 днів</li>
                    <li><img src="img/hourglass.png"> Термін доступу 1 рік з дати купівлі</li>
                    <li><img src="img/time.png"> Коли будете навчатися: у будь-який день
                        у будь-який час</li>
                    <li><img src="img/level-up.png"> Рівень складності: для середнячків</li>
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
                    <li><img src="img/check.png"> Основи здорового способу життя</li>
                    <li><img src="img/check.png"> Ефективні методи фізичної активності</li>
                    <li><img src="img/check.png"> Планування та моніторинг прогресу</li>
                </ul>
                <ul class="course-info-right">
                    <li><img src="img/check.png"> Психологічна підтримка та мотивація</li>
                    <li><img src="img/check.png"> Індивідуальні рекомендації</li>
                </ul>
            </div>
            <h3>ПРО КУРС</h3>

            <p>Стандартний курс з схуднення - це повноцінна програма, спрямована на досягнення здорової ваги та
                покращення загального самопочуття. Основні аспекти цього курсу включають в себе:</p>
            <ul>
                <br>
                <li>Оцінка поточного стану здоров'я: Перед початком курсу проводиться оцінка вашого стану здоров'я, що
                    включає аналіз медичної історії, вимірювання ваги, визначення мети схуднення та постановку
                    індивідуальних цілей.</li>
                <br>
                <li>План фізичної активності: Курс також включає розробку індивідуалізованої програми фізичної
                    активності, яка буде відповідати вашому рівню фізичної підготовки та метам схуднення.</li>
                <br>
                <li>Моніторинг прогресу та коригування плану: Протягом курсу ви будете вести щоденник харчування та
                    тренувань, а також регулярно зважуватися для відстеження прогресу. У разі потреби план харчування та
                    тренувань буде коригуватися для досягнення оптимальних результатів.</li>
                <br>
                <li>Підтримка та мотивація: Крім того, курс надає підтримку від фахівців у галузі дієтології та фітнесу,
                    а також мотиваційну підтримку для підтримки вашого успіху та стимулювання на шляху досягнення мети.
                </li>
            </ul>

            <p>Цей стандартний курс з схуднення допомагає учасникам розробити здорові звички, отримати практичні навички
                та засоби для досягнення своїх цілей схуднення та покращення здоров'я.</p>
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
            document.getElementById('payment').style.display = 'inline';
        });
        window.addEventListener('load', function() {
            if (localStorage.getItem('coursePurchased') === userEmail) {
                document.getElementById('course').style.display = 'inline';
                document.getElementById('purchase-link').style.display = 'none';
                document.getElementById('payment').style.display = 'inline';
            } else {
                document.getElementById('course').style.display = 'none';
                document.getElementById('purchase-link').style.display = 'inline-block';
                document.getElementById('payment').style.display = 'none';
            }
        });
    </script>
</body>

</html>