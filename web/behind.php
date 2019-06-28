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
<div class="parallax"></div>

<div style="height:100px; text-align: center;">
<h2>Episodes</h2>
<u>Bevat spoilers</u>
</div>
<div style="text-align: center; font-family: arial;">
<h2 style="text-align: center">De top 15 afleveringen ranked!</h2>
<img src="https://www.bleedingcool.com/wp-content/uploads/2019/04/battleofwinterfell.jpg" text-align:"center" width="750px;">
<h3 style="text-align: center">15 Best 'Game of Thrones' Episodes</h3>
<br>1.Hardhome. -Season 5, Episode 9.<br>
<br>2.Battle of the Bastards. -Season 6, Episode 9.<br>
<br>3.Blackwater. -Season 2, Episode 9.<br>
<br>4.The Rains of Castamere. -Season 3, Episode 9.<br>
<br>5.The Spoils of War. -Season 7, Episode 4.<br>
<br>6.The Door. -Season 6, Episode 5.<br>
<br>7.The Winds of Winter. -Season 6, Episode 10.<br>
<br>8.Baelor. -Season 1, Episode 9.<br>
<br>9. The Mountain and the Viper. -Season 4, Episode 8.<br>
<br>10. Winter Is Coming. -Season 1, Episode 1.<br>
<br>11. The Children. -Season 4, Episode 10.<br>
<br>12. The Lion and the Rose. -Season 4, Episode 2.<br>
<br>13. Home. -Season 6, Episode 2.<br>
<br>14. The Climb. -Season 3, Episode 6.<br>
<br>15. The Bear and the Maiden Fair. -Season 3, Episode 7.<br>


<br> En een van mijn favoriete episodes is: A Knight Of The Seven Kingdoms. -Season 8, Episode 2.<br>
</div>




<body style="text-align: center;">
  <h2>Waar gaat Game of Thrones eigenlijk over?</h2>
  <h3>Game of Thrones is een Amerikaanse fantasy-televisieserie die sinds 17 april 2011 uitgezonden wordt op de televisiezender HBO. Sinds 2017 zijn nieuwe afleveringen in Nederland alleen nog on demand te zien bij Ziggo. De serie is gebaseerd op de boeken uit de serie Het lied van ijs en vuur van de Amerikaanse schrijver George R.R. Martin.</h3>
<br style="height: 75px;">_________________________________________________________________________<br>
<q>Het verhaal van Game of Thrones speelt zich af in een mythische wereld, vooral in de Zeven Koninkrijken op het westelijke continent Westeros. Maar ook in het uiterste noorden van Westeros en op het oostelijke continent Essos.</q>
</body>

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
