<?php
// Importimo le classi
require_once "Models/movie.php";
require_once "Models/genere.php";


//Creiamo prima istanza

$genere1 = new Genere("fantastico");
$genere2 = new Genere("");

$movie1 = new Movie("Il Signore degli anelli la compaglia dell anello", "Usa, Nuova Zelanda", "178","2001",$genere1);
$movie1->setAdults("maggiore di 16");
$movie2 = new Movie("Io sto con gli Ippopotami","Usa","109","1979",$genere2);
var_dump($movie1);
var_dump($movie2);
var_dump($movie1->setAdults("maggiore di 16"));
var_dump($genere1->setTypeGenre("fantasy"));
var_dump($genere2);

?>

