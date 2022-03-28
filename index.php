<?php

/* require_once 'bicycle.php';
require_once 'car.php'; */
require_once 'truck.php';

/*
// ---------------- BIKES
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
*/


// ---------------- TRUCKS
$peugeot = new Truck("blanc", 5, "fuel", 10);

echo "<br> <br>";
echo "Camion 1 : PEUGEOT " . $peugeot->getColor() . " (roule à l'énergie " . $peugeot->getEnergy() . ")<br>";
echo "Charge maximale : " . $peugeot->getCapacity() . " kg (c'est un petit camion) <br>";
echo "Charge actuelle : " . $peugeot->getCurrentLoad() . " kg, son statut est donc : " . $peugeot->calculateLoad() . "<br>";
echo "Lancement du chargement <br>";
echo $peugeot->loadTruck();
echo "Charge actuelle : " . $peugeot->getCurrentLoad() . " kg, son statut est donc : " . $peugeot->calculateLoad() . "<br>";


$renault = new Truck("rouge", 5, "electric", 12500);

echo "<br> <br>";
echo "Camion 2 : RENAULT " . $renault->getColor() . " (roule à l'énergie " . $renault->getEnergy() . ")<br>";
echo "Charge maximale : " . $renault->getCapacity() . " kg (c'est un gros camion)<br>";
echo "Charge actuelle : " . $renault->getCurrentLoad() . " kg, son statut est donc : " . $renault->calculateLoad() . "<br>";
echo "Lancement du chargement <br>";
echo $renault->loadTruck();
echo "Charge actuelle : " . $renault->getCurrentLoad() . " kg, son statut est donc : " . $renault->calculateLoad() . "<br>";
echo $renault->forward();
echo "Vroum vroum on avance ! (" . $renault->getCurrentSpeed() . " km/h) <br>";
echo $renault->brake();