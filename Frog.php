<?php

require_once 'Animal.php';

class frog extends Animal {
    public function __construct($name) {
        parent::__construct($name); 
    }

    public function jump() {
        echo "Hop Hop";
    }
}

?>