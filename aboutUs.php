<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/aboutus.css" />
  </head>
  <body>
    <section class="main-about-us">
      <header>
        <section class="header-about-us">
          <div class="header-navigation">
            <div class="logo">
              <img src="img/logo.png" alt="" />
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
          </div>
        </section>
      </header>
      <main class="about-us-main">
        <div class="aboutus-text">
          <p>ПРО НАС</p>
        </div>
        <div class="about-us-container">
          <div class="about-us-first-container">
            <div class="first-img">
              <img src="img/aboutus3.png" alt="" />
            </div>
            <div class="first-text-container">
              <div class="about-us-first-title">
                <p>Інновації та різноманіття FitSprint</p>
              </div>
              <div class="about-us-first-subtitle">
                <p>
                  FitSprint є інноваційною компанією, яка пропонує широкий
                  спектр<br />
                  відео з фітнесу, доступних для купівлі. Заснована з метою
                  надати<br />
                  користувачам зручний та ефективний спосіб підтримувати свою<br />
                  фізичну форму, FitSprint використовує найновіші технології
                  для<br />
                  створення високоякісного контенту, який відповідає потребам<br />
                  сучасних людей.<br />
                  Компанія пропонує велике розмаїття відео для всіх рівнів<br />
                  підготовки - від початківців до професіоналів. В
                  асортименті<br />
                  FitSprint можна знайти відео з йоги, пілатесу,
                  кардіо-тренувань,<br />
                  силових тренувань та багато іншого. Кожен зможе знайти щось<br />
                  для себе, незалежно від своїх переваг чи цілей фітнесу.
                </p>
              </div>
            </div>
          </div>
          <div class="about-us-second-container">
            <div class="first-text-container">
              <div class="about-us-first-title">
                <p>Підписки та унікальні можливості FitSprint</p>
              </div>
              <div class="about-us-first-subtitle">
                <p>
                  FitSprint також надає зручні підписки, які дозволяють
                  користувачам<br />
                  отримати необмежений доступ до всієї колекції відео за
                  фіксовану<br />
                  місячну плату. Це ідеальний варіант для тих, хто хоче
                  регулярно<br />
                  тренуватися та мати можливість вибирати різноманітні відео для
                  своїх<br />
                  тренувань.<br />
                  Однією з унікальних особливостей FitSprint є те, що вони
                  постійно<br />
                  оновлюють свою бібліотеку, додаючи нові відео, що дозволяє<br />
                  користувачам не застрягати на одних і тих же тренуваннях і
                  завжди<br />
                  мати можливість спробувати щось нове. Крім того, всі
                  тренування<br />
                  розроблені професійними інструкторами з великим досвідом,
                  що<br />
                  гарантує високу якість та ефективність кожного відео.<br />
                  Завдяки зручній платформі, яка доступна як на мобільних
                  пристроях,<br />
                  так і на комп'ютерах, FitSprint забезпечує легкий доступ до
                  своїх відео з<br />
                  будь-якої точки світу. Таким чином, незалежно від того, де
                  ви<br />
                  знаходитесь, ви завжди зможете тримати себе у формі з
                  FitSprint.
                </p>
              </div>
            </div>
            <div class="first-img">
              <img src="img/aboutus4.png" alt="" />
            </div>
          </div>
        </div>
      </main>
    </section>

    <footer>
      <div class="footer-line"></div>
      <div class="footer-content">
        <div class="logo-blue">
          <img src="img/logo-blue.jpg" alt="FitSprint Logo" />
        </div>
        <div class="contact-info">
          <div class="address">
            <p>
              <img src="img/placeholder.png" alt="Address Icon" /> Площа
              Визволення 3А, Київ, Україна, 10001
            </p>
          </div>
          <div class="phones">
            <p>
              <img src="img/telephone.png" alt="Phone Icon" /> +380 965 348 512
            </p>
            <p>
              <img src="img/printer.png" alt="Phone Icon" /> +380 966 777 452
            </p>
          </div>
          <div class="social-media">
            <a href="https://www.facebook.com/people/Course-Fitsprint/pfbid08d1rzB3iAdqaBTNqSzCKsf7p95TFLAxpfmLs9PgoihoE5M2ZHZ19v1Wy9pGHji6rl/"><img src="img/communication.png" /></a>
            <a href="#"><img src="img/twitter.png" /></a>
            <a href="#"><img src="img/linkedin.png" /></a>
            <a href="#"><img src="img/video.png" /></a>
            <a href="https://www.instagram.com/fitsprint4/"><img src="img/instagram.png" /></a>
            <a href="#"><img src="img/social.png" /></a>
            <a href="#"><img src="img/pinterest.png" /></a>
          </div>
        </div>
      </div>
      <div class="footer-links">
        <a href="aboutUs.html">ПРО НАС</a>
        <a href="#">КОНТАКТИ</a>
        <a href="#">СЛУЖБА ДОПОМОГИ</a>
        <a href="#">ПОЛІТИКА КОНФІДЕНЦІЙНОСТІ</a>
      </div>
      <div class="footer-line"></div>
    </footer>
  </body>
</html>
