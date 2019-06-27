<?php
function get_GameofThrones() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` LIMIT 1';
    $statement = $pdo->query( $query );

    return $statement;

 }
 function get_GOT() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` LIMIT 3';
    $statement = $pdo->query( $query );

    return $statement;

 }
 function get_Game($code) {
   $pdo = dbConnect();
   $query     = 'SELECT * FROM `inhoud` WHERE code = "'. $code .'"';
   $statement = $pdo->query( $query );


   return $statement;
}
?>
