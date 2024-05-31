<?php
// Importimo le classi
require_once "Models/movie.php";

//Creiamo prima istanza

$movie1 = new Movie("Magic Mike", "Usa", "110","2012");

var_dump($movie1);