<?php
require_once "genere.php";
require_once "actor.php";
/* 
    Creazione della classe movie
    All interno della classe inseriamo le varie chiavi che la contraddistinguono

*/
class Movie {
    public  string $title;             // type hinting serve per definire il tipo di dato
    public  string $country;
    public  string $duration;
    public  string $release_date;
    public  Genere $genere;
    private  array  $cast;
    private string $parental_control;  // Qualificatore di visibilita  

    public function __construct(string $title, string $country, string $duration, string $release_date, Genere $genere)
    {
        $this-> title        = $title;
        $this-> country      = $country;
        $this-> duration     = $duration; 
        $this-> release_date = $release_date; 
        $this-> genere       = $genere;
        $this-> cast         = [];

    }

    public function setAdults(string $parental_control){
        if(!in_array($parental_control, ["adults", "famiglia","maggiore di 16"])) {
            throw new Exception("Il valore inserito non è consentito, usa solo adults, famiglia, maggiore di 16");
        }     
        $this-> parental_control =  $parental_control;
    }

    public function getAdults() {
        return $this-> parental_control;
    }

    public function setCast(Actor $actor) {
        $this-> cast[] = $actor;
    }

    public function getCast() {
        return $this-> cast;
    }

    public function __toString()
    {
        return "Titolo:" .$this-> title .  "<br>". 
               "Paese:" .$this-> country. "<br>".
               "Durata:" .$this-> duration. " min". "<br>".
               "Anno d'uscita:" .$this-> release_date. "<br>";
               
               
    }   
   
}
