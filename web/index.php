<?php
include 'dbVars.php';
$search = $_GET['q'];
$type = $_GET['type'];
$conn = mysqli_connect($servername,$uid,$pwd,$database);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Game of Thrones</title>
    <meta name="autor" name="Taurese Usman MD1A">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative&display=swap" rel="stylesheet">
</head>

<header>
<div class="topnav">
  <a href="index.php">
  <img src="yeeters.png" alt="" width="450px;"></a>
  <div class="search-container">
    <form action="test.php">
      <input type="text" placeholder="Zoeken..." name="search">
      <button type="submit">Zoek</button>
    </form>
  </div>
</div>
</header>

  <!--
  <div class="parallax">
  <img src="https://nos.nl/data/image/2016/07/31/303956/2048x1152.jpg" width="650px" alt="">
  </div>

  //php connection
  $connection = new PDO("mysql:host=localhost;dbname=GameofThrones", 'c3678Taurese', 'test123');
  $query = "SELECT * FROM `inhoud` ORDER BY created_at DESC LIMIT 10";
 //


-->

<div class="parallax"></div>

<div style="height:100px; text-align: center;">
<h2>Game of Thrones</h2>
<U>Voor de beste informatie over GoT</U>
</div>


<body>

  <div class="row">
    <div class="column">
      <img src="https://cdn.vox-cdn.com/thumbor/okHoApj7RCDpZhUvd6ps1Qn4lXU=/0x0:3150x2100/1200x800/filters:focal(976x479:1480x983)/cdn.vox-cdn.com/uploads/chorus_image/image/63736876/m7UGbHnw.0.jpeg" alt="Snow" style="width:100%" height="275px">
      <h2 style="color: #0073CF;">Characters!</h2>
      <br>Hier kan je dingen lezen over verschillende characters uit de serie!<br>
          <a href="characters.php">Lees Meer</a>

    </div>
    <div class="column">
      <img src="https://pmcvariety.files.wordpress.com/2017/08/game-of-thrones-best-episodes.jpg?w=1000" alt="Forest" style="width:100%" height="275px">
      <h2 style="color: #0073CF;">Episodes!</h2>
      <br>Hier kan je dingen lezen over verschillende episodes uit de serie!<br>
          <a href="episodes.php">Lees Meer</a>
    </div>
    <div class="column">
      <img src="https://pbs.twimg.com/media/D4OZhMzWAAEV5j4.jpg" alt="Mountains" style="width:100%" height="275px">
      <h2 style="color: #0073CF;">Behind The Scenes!</h2>
      <br>Hier kan je dingen lezen over de behind the scenes momenten uit de serie!<br>
        <a href="behind.php">Lees Meer</a>
    </div>
    <div class="column">
      <img src="https://onbeperktaandeslag.nl/wp-content/uploads/2018/03/kalender_icon.png" alt="Mountains" style="width:100%" height="275px">
      <h2 style="color: #0073CF;">Schedule!</h2>
      <br>Hier kan je het schedule zien over de nieuwe afleveringen en wanneer ze draaien!<br>
          <a href="schedule.php">Lees Meer</a>
    </div>
  </div>






<div class="test1">
<div class="slideshow-container">
<h1>Seasons:</h1>
<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="https://nos.nl/data/image/2016/07/31/303956/2048x1152.jpg" style="width:100%">
  <div class="text">Season: 1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="https://i2.wp.com/backupquarterback.org/wp-content/uploads/2017/09/game-of-thrones-s2.jpg?fit=800%2C450&ssl=1" style="width:100%">
  <div class="text">Season: 2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="https://timedotcom.files.wordpress.com/2019/05/game-of-thrones-s8-e6-daenerys-targaryen-iron-throne.jpeg?quality=85" style="width:100%">
  <div class="text">Season: 3</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="https://images-na.ssl-images-amazon.com/images/I/915tMZ56VVL._RI_.jpg" style="width:100%">
  <div class="text">Season: 4</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="https://images-na.ssl-images-amazon.com/images/I/913pQH48dOL._RI_.jpg" style="width:100%">
  <div class="text">Season: 5</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="https://cdn1.theyoungfolks.com/wp-content/uploads/2019/04/26000706/battleofthebastards.jpg" style="width:100%">
  <div class="text">Season: 6</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="https://nacionpix.com/wp-content/uploads/2017/08/eastwatch.jpg" style="width:100%">
  <div class="text">Season: 7</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="https://images.wallpapersden.com/image/download/arya-stark-game-of-thrones-season-8-poster_63651_2838x1591.jpg" style="width:100%">
  <div class="text">Season: 8</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>

</div>
</div>

<script>


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000);
}

</script>
<footer color="white" style="text-align: center;">


Contact:
<a href="https://www.instagram.com/dyz.t/">Instagram </a>
|
<a href="https://www.youtube.com/channel/UC3dBmpYWXFhr34MXjkU0aNw?view_as=subscriber">Youtube</a>
|
<a href="https://www.facebook.com/HBO/">Facebook</a>
<p>&copy; Taurese Usman MD1A
	</p>
</footer>
</html>
