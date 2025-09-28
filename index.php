<?php
require_once 'classes/Animaux.php';
require_once 'classes/Visiteurs.php';
require_once 'classes/Zoo.php';

// echo "yoyoy";


$zoo = new Zoo(); //cree un instance de la classe Zoo

// cree des visiteurs
$visiteur1 = new Visiteur("Loïc");
$visiteur2 = new Visiteur("Yannick");
$visiteur3 = new Visiteur("Yassine");
$visiteur4 = new Visiteur("Enzo");
$visiteur5 = new Visiteur("Pierre");


$zoo->vendreBillet($visiteur1);
$zoo->vendreBillet($visiteur2);
$zoo->vendreBillet($visiteur3);



$zoo->vendreBillet([
    new Visiteur("Pierre"),
    new Visiteur("Lolita"),
    new Visiteur("Nico"),
    new Visiteur("Ludo"),
]);



$animal1 = new Animal("herbivore", "Perroquet");
$animal2 = new Animal("herbivore", "Éléphant");
$animal3 = new Animal("omnivore", "Ours");
$animal4 = new Animal("herbivore", "Zèbre");
$animal5 = new Animal("carnivore", "Renard");
$animal6 = new Animal("herbivore", "Hippopotame");

$newAnimal1 = new Animal("carnivores", "Tigre", "Elodie");
$newAnimal2 = new Animal("herbivores", "Lapin", "Damien");
$newAnimal3 = new Animal("carnivores", "Loup", "Joao");
$newAnimal4 = new Animal("carnivores", "Requin", "Brian");
$newAnimal5 = new Animal("omnivors", "Sanglier", "Jordan");

$newAnimals = [$newAnimal1, $newAnimal2];

// $zoo->livraison([$animal1, $animal2, $animal3, $animal4, $animal5, $animal6]);

$allAnimals = [$animal1, $animal2, $animal3, $newAnimal1, $newAnimal4];
$zoo->livraison($allAnimals);



// echo $animal1->faireLeShow();
// echo $animal2->faireLeShow();

// $visiteur = new Visiteur;
// echo $visiteur->parcours();
$zoo->ouvrirLesPortes();
