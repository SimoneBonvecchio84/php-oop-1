<?php
/* 
    Creazione della classe movie
    All interno della classe inseriamo le varie chiavi che la contraddistinguono

*/
class Movie {
    public  string $title;        // type hinting serve per definire il tipo di dato
    public  string $country;
    public  string $duration;
    public  string $release_date;
    private string $parental_control;  // Qualificatore di visibilita  

    public function __construct(string $title, string $country, string $duration, string $release_date)
    {
        $this-> title        = $title;
        $this-> country      = $country;
        $this-> duration     = $duration; 
        $this-> release_date = $release_date;    
    }

    public function setAdults(string $parental_control){
        if(in_array($parental_control, ["adults", "famiglia","maggiore di 16"])) {
           $this-> parental_control = $parental_control;
        }     
    }
}
