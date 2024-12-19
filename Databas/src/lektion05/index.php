<?php
    require('../database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 05 - Att anslut till databasen med PHP</title>
</head>
<body>

<h1> Lektion 05 - Att anslut till databasen med PHP </h1>

<?php 

 if(function_exists('mysqli_connect')){
    echo "MySQLi är installerat och aktiverat! Bra!";
 } else {
    echo "MySQLi är INTE aktivit -- uppdatera din docker image!";
 }
?>

<h2> Grunläggande kommunikation med databasen </h2>

<blockquote> 

INSERT INTO Clubs (name) VALUE ('klubbens namn');
SELECT * from Clubs;

</blockquote>
    
</body>
</html>