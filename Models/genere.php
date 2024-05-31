<?php
class Genere {
    private string $type_genre;

    public function setTypeGenre(string $type_genre){
        if(in_array($type_genre,["action","fantasy","western","commedy","horror"])){
            $this-> type_genre = $type_genre;
        }
    }

    public function getTypeGenre() {
        return $this-> type_genre;
    }
}