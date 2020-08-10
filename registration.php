<?php

  require "db.php";
  $data = $_POST;
  if(isset($data['button']))
  {

    $errors = array();
    if( trim($data['username']) == '')
    {
      $errors[] = 'Введите имя пользователя!';
    }
    if( trim($data['email']) == '')
    {
      $errors[] = 'Введите ваш Email!';
    }
    if( ($data['password']) == '')
    {
      $errors[] = 'Введите пароль!';
    }

    if(R::count('users', "username = ?", array($data['username'])) > 0)
    {
      $errors[] = 'Пользователь с таким логином уже существует!';
    }
    if(R::count('users', "email = ?", array($data['email'])) > 0)
    {
      $errors[] = 'Пользователь с таким Email уже существует!';
    }

    if( empty($errors))
    {
      $user = R::dispense('users');
      $user->username = $data['username'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
      R::store($user);

      header('Location: login.php');
    } else {
      echo '<span style="color:red;left: 500px;top: 130px;position:absolute;">'.array_shift($errors).'</span>';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTML5 и CSS3 сайт</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>IST</span>
    </div>
    <div id="about">

      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">Важная информация</a>
      <a href="index.php" title="Главная">Главная</a>
    </div>
    </header>


<div id="top">
  <form  id="form_input" style="text-align:left; font-size: 0.7em; padding-top: 2%;" method="post">
    <input type="text" name="username" placeholder="Имя" value="<?php echo @$data['username'];?>" required>
    <input type="email" name="email" placeholder="Email" value="<?php echo @$data['email'];?>" required>
    <input type="password" name="password" placeholder="Пароль" value="<?php echo @$data['password'];?>" required>
    <button type="submit" name="button" id="mess_send" class="btn btnreg">Зарегистрироваться</button><br>
    <div id="autor"> Уже зарегестрированы? <a href="login.php">Авторизация</a></div>
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
