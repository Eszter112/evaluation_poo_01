<?php
// Le zoo possède des animaux et des visiteurs.
// Le zoo peut vendre des billets à une personne ou bien un groupe de visiteurs.
// Pour réduire les coûts, le zoo reçoit toujours plusieurs animaux lors des livraisons. Il arrive
// parfois qu’un animal du zoo mette bas.
// • Initialisez correctement le Zoo
// • Implémentez la méthode « vendreBillet »
// • Implémentez la méthode « livraison » qui affichera en console le message suivant
// : une livraison de XX animaux a été effectuée. (XX -> nb d’animaux livrés)
// • Implémentez la méthode « naissance » qui affichera en console le message
// suivant : un nouvel animal est né dans le Zoo
// La méthode « ouvrirLesPortes » va permettre à chaque visiteur de voir chaque animal
// faire son show…
// Le parcours étant prévu pour une personne, chaque visiteur attend la fin du parcours du
// précédent pour regarder les animaux.



class Zoo
{

    public array $animaux = [];
    public array $visiteurs = [];



    public function __construct()
    {
        $this->animaux = [];
        $this->visiteurs = [];
    }


    //Vendre un billet a un visiteur ou a un groupe
    public  function vendreBillet(Visiteur|array $visiteur)   //  Visiteur|array $visiteur  <= visiteur peut etre $visiteur ou $[]
    {
        if (is_array($visiteur)) {    //is_array  <= table??
            array_push($this->visiteurs, ...$visiteur);    //   ...$visiteur  <= il permet d'ajouter chaque element inviduellement (spread operator)

            foreach ($visiteur as $visiteur) {
                echo "Vente billet au visiteurs : " . $visiteur->nom . "\n";
            }
        } else {
            array_push($this->visiteurs, $visiteur);
            echo "Vente billet au visiteur : " . $visiteur->nom . "\n";
        }
        // var_dump($this->visiteurs);
        echo count($this->visiteurs) . "\n";
    }


    public function livraison($animaux = [])
    {


        array_push($this->animaux, ...$animaux); //...minden allat kulon kerul be
        // var_dump($this->animaux);

        // $nombre = count($this->animaux[0]);

        $nombre = count($animaux);



        echo " Une livraison de  {$nombre} animaux a été effectuée \n";
    }



    // ouvrirLesPortes(){}


    public function naissance(Animal $parent)
    {
        $nouveauNaissance = $parent->donnerNaissance();
        $this->animaux[] =  $nouveauNaissance;
        echo "***************************   Nouveauxt nés dans le Zoo  *************************\n";
        echo "Le  " . $parent->race . " vient donner naissance à un bébé " . $nouveauNaissance->race . "\n\n";
    }



    public function ouvrirLesPortes()
    {
        $this->livraison();
        $total = count($this->visiteurs);
        $moiteplus = floor($total / 2);    //floor()  <=arrondir un nombre a l'entier inferieur

        if (count($this->visiteurs) >= 3) {

            echo "*******************  Le zoo ouvre ses portes aux visiteurs   **********************\n\n";

            foreach ($this->visiteurs as $i => $visiteur) {

                $visiteur->parcours($this->animaux);
                if ($i == $moiteplus) {
                    $this->naissance($this->animaux[1]);
                }
            }





            $this->naissance($this->animaux[0]);



            echo "~~~~~~~~~~~~ Fin de parcours pour tous les visiteurs ~~~~~~~~~~~~~~~~~~~~\n";
        } else {
            echo "Le zoo reste fermé car le nombre de visiteurs est insuffisant. Pour des raisons économiques, un minimum de 3 visiteurs est nécessaire. Merci de votre compréhension.\n";
        }
    }
}



// usleep(500000); // 0.5 sec pause