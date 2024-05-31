<?php
class Actor {
    public  string $name;
    public  string $surname;
    public  string $date_birth;
    // private string $gender;
    
    public function __construct(string $name, string $surname, string $date_birth) {
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> date_birth = $date_birth;
    }

    // public function setGender($gender) {
    //     if(!in_array($gender,["male","female"])){
    //         throw new Exception("il valore inserito non è consentito");
    //     }
    //     $this->gender =  $gender;
    // }

    // public function getGender() {
    //     return $this-> gender;
    // }
}
