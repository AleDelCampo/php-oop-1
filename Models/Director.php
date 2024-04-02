<?php
class Director {
    public $firstName;
    public $lastName;
    public $nationality;

    public function __construct($_firstName, $_lastName, $_nationality) {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->nationality = $_nationality;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$director1 = new Director("Guillermo", "Del Toro", "Messicana");
$director2 = new Director("Tim", "Burton", "Americana");