<?php
// Importimo le classi
require_once "Models/movie.php";
require_once "Models/genere.php";
require_once "Models/actor.php";


//Creiamo prima istanza

$genere1 = new Genere("fantastico");
$genere2 = new Genere("Commedia");

$attore1 = new Actor("Pippo", "Franco", "1900-1-1",);

$movie1 = new Movie("Il Signore degli anelli la compaglia dell anello", "Usa, Nuova Zelanda", "178","2001",$genere1);
$movie1->setAdults("maggiore di 16");
$movie1->setCast($attore1);
$movie2 = new Movie("Io sto con gli Ippopotami","Usa","109","1979",$genere2, "Cast Attori");

var_dump($movie1)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

