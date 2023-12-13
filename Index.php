<?php

class HappyBirthday {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function wish() {
        echo "Happy Birthday, " . $this->name . "! You are " . strtoupper($this->name) . "'s top priority today!";
    }
}

// Create an instance of the HappyBirthday class
$birthday = new HappyBirthday("vinit shahdeo");

// Call the wish method to print the birthday greeting
$birthday->wish();

?>
