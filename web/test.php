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

<div style="height:150px; text-align: center;">
<h2>Uw Zoek Resultaten:</h2>
<php>
  <?php echo "<h1>Sorry, maar dit onderdeel is nog onder constructie!</h1>";
        echo "<h3>Kijk gerust rond. Alle content is ook mogelijk te vinden via de homepage!</h3>"; ?>
</div>


<!--

 //php code van de search

$connection = new PDO("mysql:host=localhost;dbname=GameofThrones", 'root', 'root');

if (isset($_GET['id'])) {

    $statement = $connection->prepare('SELECT * FROM inhous WHERE id=:id');
    $statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);

    if ($statement->execute()) {
        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $streetname = $row['Characters'];
        } else {
            die('This character was not found!');
        }
    }
} else {
    die('No ID present');
}

 * @return mixed|string

function generate_hoodname()
{

    $firstnames = array(
        'Stark',
        'Snow',
        'Lannister',
        'Tarth',
        'Tyrion',
        'Arya',
        'Jon',
        'Daenerys',
    );




    $name = $firstnames[array_rand($firstnames, 1)];
    $name .= ' the ';
    return $name;
}
?>

-->



<body>
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
