<?php
// • Créez les visiteurs suivants : Loïc, Yannick, Yassine, Enzo et Pierre et faites-les
// visiter le zoo qui contient les animaux de votre choix. La naissance d’un nouvel
// animal intervient après la visite des visiteurs. (Le premier animal de la liste met bas)
// • Rajoutez une naissance après que la moitié des visiteurs soit passée. (Le
// deuxième animal de la liste met bas).

class Visiteur
{
    public string $nom;
    public $visiteurs = [];


    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function parcours($animaux = [])
    {
        echo "***********************    " . $this->nom . "   commence son parcours  ****************************************************  \n";
        foreach ($animaux as $animal) {
            $animal->faireLeShow();
        }
        echo "***********************   Fin de parcours pour   " . $this->nom . "     *********************************************   \n";
    }
}
