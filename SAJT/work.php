<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>KeferTravel</title>
</head>

<body>
  <header>
    <a class="logo" href="index.html">KeferTravel </a>
    <div class="toggle"></div>
    <div class="navigation">
      <ul>
        <li><a href="index.html">Početna strana</a></li>
        <li><a href="services.html">Usluge</a></li>
        <li><a href="work.php">Lokacije</a></li>
        <li><a href="contact.html">Kontakt</a></li>
      </ul>
      <div class="social-bar">
        <ul>
          <li>
            <a href="https://facebook.com">
              <img src="images/facebook.png" target="_blank" alt="" />
            </a>
          </li>
          <li>
            <a href="https://twitter.com">
              <img src="images/twitter.png" target="_blank" alt="" />
            </a>
          </li>
          <li>
            <a href="https://instagram.com">
              <img src="images/instagram.png" target="_blank" alt="" />
            </a>
          </li>
        </ul>
        <a href="mailto:you@email.com" class="email-icon">
          <img src="images/email.png" alt="" />
        </a>
      </div>
    </div>
  </header>

  <section>
    <div class="title">
      <h1>Lokacije koje vam nudimo</h1>
      <p>
        Najbolje turističke lokacije po najpovoljnijim cenama u Srbiji!
        Turska, Egipat, Grčka i mnogi drugi..
      </p>
      <form actions="nesto.php" method="post">
        <div>
          <label for="destinacija">Destinacija:</label>
          <input type="text" text id="destinacija" name="destinacija">
        </div>
        <div>
          <lable for="vreme">Mesec-Dan:</lable>
          <input type="text" text id="vreme" name="vreme">
        </div>
        <div>
          <lable for="cena">Cena destinacije:</lable>
          <input type="text" text id="cena" name="cena">
        </div>
        <button type="submit">Traži</button>
      </form>
      <div class="portfolio">
        <div class="item">
          <img src="images/grcka1.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/grcka2.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/grcka3.png" alt="" />

        </div>
        <div class="item">
          <img src="images/grcka4.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/egipat1.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/egipat2.png" alt="" />

        </div>
        <div class="item">
          <img src="images/egipat3.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/egipat4.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more1.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more2.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more3.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more4.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more5.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more6.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more7.jpeg" alt="" />

        </div>
        <div class="item">
          <img src="images/more8.jpeg" alt="" />

        </div>
      </div>
  </section>

  <script src="js/script.js"></script>
</body>

</html>