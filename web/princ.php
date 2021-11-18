<?php


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="princ.css">
    <title>InspireBook</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="logo.png" alt="">
      </div>
      <nav>
        <ul class="horizantal-bar nav-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Latest</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </nav>
      <h1 class="text-center">Chaque livre est une inspiration</h1>
    </header>

    <main>

      <section id="book-section">
        <div class="livre">
          <a href="#1"><img src="livre\callMe.jpg" alt=""></a>
          <div class="box-inf" id="1">
            <a href="#">X</a>
            <p>Call Me by Your Name is the story of a sudden and powerful romance that blossoms between an adolescent boy and a summer guest</p>
          </div>
        </div>

        <div class="livre">
          <a href="#2"><img src="livre\camelot.jpg" alt=""></a>
          <div class="box-inf" id="2">
            <a href="#">X</a>
            <p>Code Name Camelot is the first in the Noah Wolf series and is advertised as an action thriller. No emotions. Having suffered from blunted affectation disorder</p>
          </div>
        </div>

        <div class="livre">
          <a href="#3"><img src="livre\maya.jpg" alt=""></a>
          <div class="box-inf" id="3">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#4"><img src="livre\bookwithnoname.jpg" alt=""></a>
          <div class="box-inf" id="4">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#5"><img src="livre\helene.jpg" alt=""></a>
          <div class="box-inf" id="5">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#6"><img src="livre\wind.jpg" alt=""></a>
          <div class="box-inf" id="6">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#7"><img src="livre\serpent.jpg" alt=""></a>
          <div class="box-inf" id="7">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#8"><img src="livre\spirou.jpg" alt=""></a>
          <div class="box-inf" id="8">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#9"><img src="livre\equator.jpg" alt=""></a>
          <div class="box-inf" id="9">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#10"><img src="livre\amin.jpg" alt=""></a>
          <div class="box-inf" id="10">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#11"><img src="livre\inner.jpg" alt=""></a>
          <div class="box-inf" id="11">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>

        <div class="livre">
          <a href="#12"><img src="livre\lostnames.jpg" alt=""></a>
          <div class="box-inf" id="12">
            <a href="#">X</a>
            <p>Content</p>
          </div>
        </div>
      </section>


      <section id="contact">
        <h1 class="section-heading mb75px white text-center">

          <span><i class="fas fa-id-card"></i></span>
          <span>Contact</span>

        </h1>

        <div class="contact-container">

          <div id="contact-form-container">
            <form id="contact-form" action="index.html" method="post">
              <input id="input-name" name="name" type="text" placeholder="Your Name">
              <input id="input-email" name="input-email" type="text" required placeholder="Your Email">
              <textarea id="input-message" name="input-message" rows="2" cols=40 placeholder="Message"></textarea>
              <button class="sub-btn" type="submit">SEND MESSAGE</button>
            </form>
          </div>

          <div id="my-details-container">
            <h3>Get In Touch</h3>
            <!-- <p>To get in touch with me this is more information</p> -->
            <h3>My Address</h3>
            <div class="my-details-info-container">
              <span><i class="fas fa-map-marker-alt"></i></span>
              <span>Ariana Soghra</span>
            </div>

            <div class="my-details-info-container">
              <span><i class="fas fa-mobile"></i></span>
              <span>52005403</span>
            </div>

            <div class="my-details-info-container">
              <span><i class="fas fa-envelope-open"></i></span>
              <span>bilel.kort@esprit.tn</span>
            </div>
          </div>
        </div>

      </section>

    </main>

  </body>
</html>
