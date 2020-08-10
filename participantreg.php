<?php

  require "db.php";
  $data = $_POST;
  if(isset($data['button_reg_p']))
  {

    $errors = array();
    if( empty($errors))
    {
      $user = R::dispense('participants');
      $user->name = $data['name'];
      $user->doclad = $data['doclad'];
      $user->work = $data['work'];
      $user->address = $data['address'];
      $user->email = $data['email'];
      $user->secnum = $data['secnum'];
      $user->files = $data['files'];
      $user->formu = $data['formu'];
      $user->radio = $data['radio'];
      R::store($user);

    header('Location: kab1.php');
    } else {
      echo '<div style="color:red;left: 500px;top: 130px;position:absolute;">'.array_shift($errors).'</div><hr>';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IST</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span style="color:white;margin-top: 4%;">Профиль :&nbsp;
        <?php
      if (isset($_SESSION['logged_user']))
      {
          $usern = $_SESSION['logged_user']->username;
          echo "<p style='color:orange;float:right;'>" . $usern . "</p>";

      }
        ?>

      </span>
    </div>

    <div id="about"><a href="index.php">Главная</a>
      <?php
    if (isset($_SESSION['logged_user']))
    {
        echo "<a href='logout.php' style='color:orange;text-decoration:none;'> Выйти</a>";
    }
    ?>
    </div>
    </header>


<div id="top">
  <form  id="form_input" style="text-align:left; font-size: 0.4em;margin-top: -20px;"  method="post">
    <input type="text" name="name" placeholder="Прізвище, ім’я, по-батькові автора" value="<?php echo @$data['name'];?>" required>
    <input type="text" name="doclad" placeholder="Назва доповіді " value="<?php echo @$data['doclad'];?>" required>
    <input type="text" name="work" placeholder="Країна, місто, організація, посада, вчена ступінь, наукове " value="<?php echo @$data['work'];?>" required>
    <input type="text" name="address" placeholder="Адреса для листування з індексом міста " value="<?php echo @$data['address'];?>" required>
    <input type="email" name="email" placeholder="E-mail, контактний телефон (з вказівкою коду) " value="<?php echo @$data['email'];?>" required>

    <input type="text" name="secnum" placeholder="Назва (номер) секції " value="<?php echo @$data['secnum'];?>" required>
    <div id="autor" style="font-size: 1.2em;">Прикріпити доповідь</div>
    <input type="file" name="files" style="color:white;" multiple="multiple" accept=".doc,.docx,.pdf" required>
    <div id="autor" style="font-size: 1.2em;"> Форма участі : &nbsp;&nbsp;Очна</div>
    <div id="autor" style="margin-right:6px;"><input type="radio" style="width:20px;height:20px;" id="radio" value="yes" name="formu" required></div>
    <div id="autor" style="font-size:1.2em;"> Заочна</div>
    <div id="autor" ><input type="radio" style="width:20px;height:20px;" id="radio" value="no" name="formu" checked required></div><br><br><br>


    <div id="autor" style="font-size: 1.2em;"> Чи є співавтори?&nbsp;&nbsp;Так</div>
    <div id="autor" style="margin-right:6px;"><input type="radio" style="width:20px;height:20px;" id="radio" value="yes" name="group" required></div>
    <div id="autor" style="font-size:1.2em;"> Ні</div>
    <div id="autor" ><input type="radio" style="width:20px;height:20px;" id="radio" value="no" name="group" checked required></div>

    <button type="submit" name="button_reg_p" id="mess_send" class="btn btnreg" style="font-size:1.4em;margin-top:5px;">Зареєструвати учасника</button><br>

  </form>
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
