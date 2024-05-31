<?php
// Importimo le classi
require_once "Models/movie.php";

//Creiamo prima istanza

$movie1 = new Movie("Magic Mike", "Usa", "110","2012");
$movie2 = new Movie("Io sto con gli Ippopotami","Usa","109","1979");
$movie1->setAdults("maggiore di 16");
var_dump($movie1);
var_dump($movie2);

var_dump($movie1->setAdults("ciao"))

?>

