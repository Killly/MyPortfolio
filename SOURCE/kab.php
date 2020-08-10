<?php

require "db.php";


?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IST</title>
  <link rel='stylesheet' href='css/main.css'>
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#overview')">
      <span style="color:white;margin-top: 4%;">Особистий кабінет :&nbsp;
        <?php
      if (isset($_SESSION['logged_user']))
      {
          $usern = $_SESSION['logged_user']->username;
          echo "<p style='color:orange;float:right;'>" . $usern . "</p>";

      }
        ?>

      </span>
    </div>

    <div id="about"><a href="index.php">Головна</a>
      <?php
    if (isset($_SESSION['logged_user']))
    {
        echo "<a href='logout.php' style='color:orange;' >Вийти</a>";
    }
    ?>
    </div>

  </header>





  <div id="overview">

    <div class="img">
      <a href="participantreg.php"><img src="https://w-dog.ru/wallpapers/13/18/403631482992153.jpg" alt=""></a>
      <span>Реєстрація учасника конференції</span>
    </div>
    <div class="img">
      <a href="onlineconfer.php"><img src="https://narfu.ru/upload/iblock/c27/Fizicheskaya-kultura-i-sport-v-sisteme-obrazovaniya-Rossii-_3_.jpg" alt=""></a>
      <span>Оформити заяву на он-лайн участь в конференції</span>
    </div>
    <div class="img">
      <a href="r_tables.php"><img src="https://sites.znu.edu.ua/znu_news/gallery/2018/01/news-42214-ukr-2018-01-26--09-38-31-P1270269.jpg" alt=""></a>
      <span>Оформити заяву на круглий стіл</span>

    </div>
  </div>

  <div id="faq">
    <div>
      <span class="title">Фінансові Умови</span><br>
      <span class="heading">Як буде проводитись оплата?</span>
      <p>За кожну доповідь учасника обсягом до 4 повних сторінок після позитивної рецензії необхідно перерахувати оргвнесок у розмірі 300 грн. (від учасників із України) або 30 Є (від закордонних учасників).
Для отримання друкованого примірника матеріалів доповідей необхідно додатково перерахувати 200 грн. або 10 Є. За кожну додаткову сторінку матеріалів необхідно перерахувати додатково 50 грн. Реквізити рахунку для оплати оргвнеску буде вказано після позитивної рецензії.

</p>

    </div>
    <div>
      <span class="title">Як нас знайти?</span><br>
      <span class="heading">Адреса Оргкомітету</span>
      <p>кафедра Прикладної математики ХНУРЕ, к. 26 «з», пр. Науки, 14, м. Харків,
      61166, Україна, тел.:+038- (057) -7021-436,  +38-(050)-199-52-82.</p>
      <span class="heading">Для довідок: </span>
      <p>Кобзєв Володимир Григорович, к.т.н., с.н.с.
моб.тел.: +38- (050)-199-52-82,  +38-(063)-487-76-11.
E-mail: ist2012@ukr.net
      </p>

    </div>
    <div>
      <span class="title">Важливі Дати</span><br>
      <span class="heading"></span>
      <p>До 15 серпня 2019 	Подання заявок та матеріалів доповідей<br>
До 25 серпня 2019 	Рецензування матеріалів та інформування авторів<br>
До 30 серпня 2019 	Оплата реєстраційних внесків<br>
До 2 вересня 2019 	Розсилання запрошень<br>
9-14 вересня 2019 	Робота конференції
</p>
      <span class="heading">Умови перебування</span>
      <p>Передбачено централізоване поселення учасників конференції на базі відпочинку (40 км від м. Одеса). Оплата за проживання (200-600 грн./ доба  залежно від комфорту) та харчування здійснюється самостійно. </p>
      <p>
    <button type='submit' name='button_sent' id='mess_send1' class='btn btnreg'>Зробити Розсилку</button>
      </p>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>
