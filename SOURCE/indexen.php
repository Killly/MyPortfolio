<?php

require "db.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTML5 и CSS3 сайт</title>
  <link rel='stylesheet' href='css/main.css'>
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>IST &nbsp;<a  href="index.php"  title="UA" ><div class="lang_ua"></div></a>
<a  href="indexru.php"  title="RU" ><div class="lang_ru"></div></a>
      </span>
    </div>
    <div id="about">
      <a href="#" title="Возможности" onclick="slowScroll('#main')">Program commitee</a>
      <a href="#" onclick="slowScroll('#overview')" title="Преимущества">Organizing Commitee</a>
      <a href="#" onclick="slowScroll('.theme')" title="Преимущества">Conference Topics</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Контакты">Leave a review </a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
      <?php
    if (isset($_SESSION['logged_user']))
    {
        $usern = $_SESSION['logged_user']->username;
        echo "<a href='kab.php'>Hello " . $usern . "</a>";
        echo "<a href='logout.php' style='color:orange;'> Exit</a>";
    } else {
      echo "<a href='registration.php' style='color:orange;' id='log' title='Main'>Sign in</a>";
    }
      ?>

    </div>
  </header>

  <div id="top"><div  style="font-size:0.5em;margin-bottom:20px;margin-top:-40px">Ministry of Education and Science of Ukraine
National Academy of Sciences of Ukraine
Lublin Department of the Polish Academy of Sciences
Representation of the Polish Academy of Sciences in Kyiv
Kharkiv National University of Radio Electronics
Kharkiv National University of Urban Economics
them AM Beketova
AGH Scientific and Technological University in Krakow
Nikolaev Shipbuilding University named after. Admiral Makarov
Odessa National Polytechnic University
Precarpathian National University named after. V. Stefanyk
Ukrainian Oil and Gas Academy
Ukrainian Federation of Informatics
Academy of Sciences of Applied Radio Electronics
Belarusian State University of Informatics and Radio Electronics
Belarusian National Technical University
National University of Civil Protection of Ukraine
Zaporizhzhya National Technical University </div>

  <h3>8th International Scientific and Technical Conference</h3>
  <h2>"INFORMATION SYSTEMS AND TECHNOLOGIES IST-2019"</h2>
    <h4>September 9-14, 2019</h4>
    <div style="background:linear-gradient( black, grey, white, grey);opacity:0.4;">
    <div style="margin: 10px auto 0px; background-image:url(in2.png);background-size: cover;width:400px;height:104px;"></div>
    <div style="margin: 0px auto 10px; background-image:url(in1.png);background-size: cover;width:545px;height:227px;"></div>
    </div>
    <h4 style="margin: 0px auto 10px;">Kharkiv - Koblevo</h4>
    <h4 style="margin: 40px auto 20px;">DEAR COLLEAGUES</h4>
    <div  style="font-size:0.6em;margin-bottom:20px;">

      The 8th International Scientific and Technical Conference "INFORMATION SYSTEMS AND TECHNOLOGIES IST-2019" will be held on September 9-14, 2019 at the recreational base in the resort area of Koblevo (Mykolaiv region).
      We invite scientists, employees of scientific institutions and enterprises, graduate students, graduate students and students to take part in the conference.
</div>
  </div>

  <div id="main">
    <div class="intro">
      <h3>The chairman of the conference is IST-2019</h3>
      <span>Semenets VV, rector of KNURE, president of ANPRE, doctor of technical sciences, prof.</span>
      <h3>Honorary co-chairman</h3>
      <span>Sobczuk H., Director of the Delegation of the Polish Academy of Sciences in Kiev, Ph.D., prof.
</span>
    </div>
    <div class="text"><h3>PROGRAM COMMITTEE OF THE CONFERENCE</h3>
      <span style="font-size:0.8em;margin-top:20px;">prof. Bakurova AV, ZNTU, Ukraine
prof. Bezkorovoyny VV, KNURE,
   Ukraine
prof. Bisikalo O.V., VNTU, Ukraine
prof. Blintsov VS, NKU, Ukraine
prof. Bodynsky Ye.V., KNURE,
Ukraine
prof. Varbanov R., Bulgaria
prof. Gomenyuk SI, ZNU, Ukraine
prof. Gorbenko I.D., KhNU, Ukraine
prof. Grebennik IV, KNURE, Ukraine
prof. Gunchenko Yu.O., ONU, Ukraine
prof. Dudar Z.V., KNURE, Ukraine
associate professor Zhelezko B.A., BNTU, Belarus
prof. Zhivitskaya E.N., BDUIR, Belarus
prof. Kadyrov AL, KSU, Tajikistan
associate professor Kobzev VG, KNURE, Ukraine
prof. Kobosev AA, ONPU, Ukraine
prof. Kokotyuk I., MSU, USA
prof. Kohut I.T., PNU, Ukraine
prof. Kush A., PAN, Poland
prof. Lebkovsky P., AGH UST,
Poland
prof. Litvin O. M., UIPA, Ukraine
prof. Luzhetsky VA, VNTU, Ukraine prof. Mashtalir VP, KNURE, Ukraine prof. Mirzoahmedov F., Tajikistan prof. Nikitchenko N.S., Kyiv National University, Ukraine
prof. Novozhilova MV, KHNUMG, Ukraine
prof. Pasichnyk V.V., LPU, Ukraine
prof. Petrishin L., AGH UST,
Poland, PNU, Ukraine
prof. Ponomarev Yu.V.,
   JSC "Ukrtransgas", Ukraine
prof. Popov V., Bulgaria
prof. Rudenko O.G., KhNEU, Ukraine
prof. Rybalsky O., EAU
Ukraine
prof. Sineglazov VM, NAU, Ukraine
prof. Stakhov O.P., Canada
prof. Stoyan Yu.G., IPMash NAS, Ukraine
prof. Sukach MK, KNUBA, Ukraine
prof. Tevyashev AD, KNURE, Ukraine
prof. Tkachenko VF, KNURE, Ukraine
prof. Filatov VO, KNURE, Ukraine
prof. Khazmuradov MA, NSC KhPTI
   National Academy of Sciences of Ukraine, Ukraine
prof. Chub IA, NUTZU, Ukraine
prof. Shishmanov K.T., Bulgaria
prof. Shubin I.U., KNURE, Ukraine
prof. Yakovlev SV, NAU "KhAI", Ukraine
</span>
    </div>
  </div>

  <div id="overview">
    <div class="intro"><h3 style="margin-bottom:10px;">ORGANIZING COMMITTEE OF THE CONFERENCE</h3></div>
    <div class="text"><span style="font-size:0.8em;margin:20px auto 20px;">Co-chairmen:
Tevyashev AD - Doctor of Technical Sciences, professor, KNURE, academician of NSAU
Petryshyn L. - Ph.D., Prof., AGH UST, Poland, PNU (Ivano-
Frankivsk)
Zhivitskaya E.N. - Ph.D., Prof., BDUIR, Belarus
Krasovsky E. - Doctor of Technical Sciences, Professor, Polish Academy of Sciences, Department at
Lublin
Deputy Head: Kobzev V.G. - Ph.D., Senior Researcher, KNURE
Responsible secretary - Matviyenko O., Ph.D., Senior lecturer. KNURE
Working Group of the Organizing Committee
Mischeryakov Yu.V., Ph.D., Associate Professor, KNURE
Ilyash Yu.Yu., Petrishin M.L., Izmailov A.V., PNU
Dras O. М., Kuzmenko LV, Onischenko K.G., KNURE

</span>
</div>
</div>

<div id="main" class="theme">
  <div class="intro">
    <span style="font-size:0.8em;margin-top:20px;" class="sec"><a href=""><b> Section 1.</b> Modern Information Systems and Technologies: Issues
methods, models. Project and program management. </a><br>
<a href=""><b>Section 2.</b> Mathematical and Computer Modeling in Informational
systems. </a><br>
<a href=""><b> Section 3.</b> Information Resource Saving, Environmentally Safe
technology. Geoinformation Systems and Technologies.</a><br>
<a href=""><b> Section 4.</b> Pattern Recognition, Digital Image Processing, and
Signals. </a><br>
<a href=""><b> Section 5.</b> Information technology in society, education, medicine, economics,
management, civil defense, printing, ecology and law. </a><br>
<a href=""><b> Section 6.</b> Software Engineering. </a><br>
<a href=""><b> Section 7.</b> Communication, GRID and Cloud Technology. </a><br>
<a href=""><b> Section 8.</b> Privacy Protection. Information Security. </a><br>
<a href=""><b> Section 9.</b> Data mining, DataMining, and BigData technology. </a>
</span>

  </div>
  <div class="text">
    <span style="font-size:0.8em;" class="sec">
      <div style="background: url(bs.jpg); width: 100%;height: 400px;background-size:cover;margin-top:-20px;"></div><br>


</span>
</div>
</div>

  <div id="contacts">
    <center><h5>Leave review</h5></center>
    <form id="form_input">
      <label for="name">Name <span>*</span></label><br>
      <input type="text" placeholder="Enter your name" name="name" id="name"><br>
      <label for="email">Email <span>*</span></label><br>
			<input type="email" placeholder="Enter your e-mail" name="email" id="email"><br>
			<label for="message">Messege <span>*</span></label><br>
			<textarea placeholder="Write down the messege" name="message" id="message"></textarea><br>
			<div id="mess_send" class="btn">Send</div>
    </form>
  </div>

  <div id="faq">
    <div>
      <span class="title">Financial Terms</span><br>
      <span class="heading">How will payment be made?</span>
      <p>For each report of the participant in volume up to 4 full pages after positive review it is necessary to transfer the registration fee in the amount of 300 UAH. (from participants from Ukraine) or 30 E (from foreign participants).
In order to receive a printed copy of the materials of the reports you must additionally transfer 200 UAH. or 10 Е. For each additional page of materials it is necessary to transfer additional UAH 50. The account details for payment of the registration fee will be indicated after a positive review.
</p>

    </div>
    <div>
      <span class="title">How to find us?</span><br>
      <span class="heading">Address of the Organizing Committee</span>
      <p>Department of Applied Mathematics KNURE, Vol. 26 "Z", Prospect Nauki, 14, Kharkiv,
       61166, Ukraine, tel .: + 038- (057) -7021-436, + 38- (050) -199-52-82.</p>
      <span class="heading">For more information: </span>
      <p>Kobzev Volodymyr Grigorievich, Ph.D., Senior Scientist
Mobile: + 38- (050) -199-52-82, + 38- (063) -487-76-11.
E-mail: ist2012@ukr.net
      </p>
      <p><a download href="listen.doc" style="text-decoration: none;font-weight: bold;color:orange;">Download the Information List</a></p>
    </div>
    <div>
      <span class="title">Important Dates</span><br>
      <span class="heading"></span>
      <p> August 15, 2019 Submission of applications and report materials <br>
 August 25, 2019 Reviewing Materials and Informing Authors <br>
 August 30, 2019 Payment of registration fees <br>
 September 2, 2019 Sending invitations <br>
September 9-14, 2019 The work of the conference
</p>
      <span class="heading">Terms of stay</span>
      <p>A centralized settlement of conference participants is planned at the recreation center (40 km from Odesa). Payment for accommodation (200-600 UAH / day depending on comfort) and the food is carried out independently. </p>

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
