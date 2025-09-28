<?php
// Certains animaux sont des herbivores et d’autres sont des carnivores. Tous les animaux
// du zoo implémentent la méthode « faireLeShow » qui va afficher un message sur la sortie
// standard.
// Tous les animaux peuvent « donnerNaissance » à un autre animal. Attention, un lion
// n’engendre pas de zèbre (en tout cas pas en 2020). La méthode retourne donc l’animal
// qui vient d’être mis à bas.
// Un animal livré possède un nom donné par ses propriétaires, un animal né dans le zoo
// non.
// • Définissez l’héritage pour les animaux.
// • Implémentez les constructeurs nécessaires.
// • Implémentez au(x) bon(s) endroit(s) les méthodes donnerNaissance et
// faireLeShow
// La méthode « faireLeShow » va afficher le message suivant pour un lion nommé concon :
// « cet animal carnivore qui est un lion et qui s’appelle concon »


class Animal
{
    public string $nom;
    public string $race;
    public string $type;
    // public static array $animaux = [];




    public function __construct($type,  $race, $nom = "")
    {
        $this->type = $type;
        $this->race = $race;
        $this->nom = $nom;
    }



    public  function faireLeShow()
    {
        if (!empty($this->nom)) {
            echo "Cet animal " . $this->type . " qui est un " . $this->race . " et qui s'appelle " . $this->nom . " fait le show " . "\n";
        } else {
            echo "Cet animal " . $this->type . " qui est un " . $this->race . " fait le show " . "\n";
        }
    }




    public function donnerNaissance(): Animal
    {
        return new static($this->type, $this->race);
    }
}



class Lion extends Animal
{
    public function __construct()
    {
        parent::__construct("carnivore", "lion");
    }

    public function donnerNaissance(): Lion
    {
        return new Lion();
    }
}


class Elephent extends Animal
{
    public function __construct()
    {
        parent::__construct("herbivore", "elephant");
    }

    public function donnerNaissance(): Elephent
    {
        return new Elephent();
    }
}


class Zebre extends Animal
{
    public function __construct()
    {
        parent::__construct("herbivore", "zebre");
    }

    public function donnerNaissance(): Zebre
    {
        return new Zebre();
    }
}

class Ours extends Animal
{
    public function __construct()
    {
        parent::__construct("omnivore", "ours");
    }

    public function donnerNaissance(): Animal
    {
        return new Ours;
    }
}

class Perroquet extends Animal
{
    public function __construct()
    {
        parent::__construct("herbivore", "perroquet");
    }
    public function donnerNaissance(): Animal
    {
        return new Perroquet;
    }
}

class Renard extends Animal
{
    public function __construct()
    {
        parent::__construct("carnivore", "renard");
    }
    public function donnerNaissance(): Animal
    {
        return new Renard;
    }
}

class Hippopotame extends Animal
{
    public function __construct()
    {
        parent::__construct("herbivore", "hippopotame");
    }
    public function donnerNaissance(): Animal
    {
        return new Hippopotame();
    }
}
