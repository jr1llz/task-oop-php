<?php

require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("Shaun");
echo "Name: ",$sheep->name;
echo "<br>";
echo "Legs: ",$sheep->legs;
echo "<br>";
echo "Cold Blooded: ",$sheep->cold_blooded;
echo "<br><br>";

$kodok = new Frog("Frog");
echo "Name: ",$kodok->name;
echo "<br>";
echo "Legs: ",$kodok->legs;
echo "<br>";
echo "Cold Blooded: ",$kodok->cold_blooded;
echo "<br>";
echo "Jump: ",$kodok->jump();
echo "<br><br>";

$ape = new Ape("Ape");
echo "Name: ",$ape->name;
echo "<br>";
echo "Legs: ",$ape->legs;
echo "<br>";
echo "Cold Blooded: ",$ape->cold_blooded;
echo "<br>";
echo "Yell: ",$ape->yell();

?>