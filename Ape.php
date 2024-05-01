<?php

require_once 'Animal.php';

class ape extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name, $legs = 2);
    }
    public function yell()
    {
      echo "Auooo";
    }
  }


?>