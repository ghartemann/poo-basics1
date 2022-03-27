<?php

// ---------------- BIKES

// index.php
require_once 'bicycle.php';
$bike = new Bicycle("blue", 0);

echo "Vélo 1 <br>";
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo "<br><br>";

$tornado = new Bicycle("red", 10);

echo "Vélo 2 <br>";
echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake();



// ---------------- CARS
require_once 'car.php';
$merco = new Car("noire", 6, "vinDiesel");

echo "<br> <br>";
echo "Voiture 1 : LA MERCO " . $merco->getColor() . " (roule à l'énergie " . $merco->getEnergy() . ")<br>";
echo $merco->start();
echo "Démarrage en côte (" . $merco->getCurrentSpeed() . " km/h) <br>";
echo $merco->forward();
echo "Vroum vroum on avance ! (" . $merco->getCurrentSpeed() . " km/h) <br>";
echo $merco->brake();

$catrelle = new Car("bleue", 6, "sans-plomb 95");

echo "<br> <br>";
echo "Voiture 2 : LA CATRELLE " . $catrelle->getColor() . " (roule à l'énergie " . $catrelle->getEnergy() . ")<br>";
echo $catrelle->start();
echo "Démarrage en côte (" . $catrelle->getCurrentSpeed() . " km/h) <br>";
echo $catrelle->forward();
echo "Vroum vroum on avance ! (" . $catrelle->getCurrentSpeed() . " km/h) <br>";
echo $catrelle->brake();

