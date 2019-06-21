<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Game of Thrones</title>
    <meta name="autor" name="Taurese Usman MD1A">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="schedule.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative&display=swap" rel="stylesheet">
</head>

<header>
<div class="topnav">
  <a href="index.php">
  <img src="yeeters.png" alt="" width="450px;"></a>
  <div class="search-container">
    <form action="test.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
</header>
<div class="parallax"></div>

<div style="height:150px; text-align: center;">
<h2>Schedule</h2>
<h3>Schedule van de afleveringen van <b>Season: 8</b></h3>
</div>





<body>
	<div class="test123" style="text-align: center;">
<?php
/* draws a calendar */
function dbConnect() {

    try {
    $db_host = 'localhost';
    $db_name = 'GameOfThrones';
    $db_usern = 'root';
    $db_passw = 'root';

        $pdo= new PDO("mysql:host=$db_host;dbname=$db_name", $db_usern, $db_passw);

        return $pdo;

    } catch (PDOException $e) {
        echo 'something not ok: ' . $e->getMessage();
        die();
    }
}

function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';


			$calendar.= str_repeat('<p> </p>',2);

		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';

	/* all done, return result */
	return $calendar;
}

/* sample usages */
echo '<h2>April 2019</h2>';
echo draw_calendar(4,2019);

echo '<h2>Mei 2019</h2>';
echo draw_calendar(5,2019);
 ?>
</div>
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
