<?php


// créer une clzass vehicule attribut  $litreEssence Méthodes guetter et setter pour $litreEssence

class vehicule
{

  private $litreEssence;   // Déclaration des propriétés (ou attributs)



  // Je crée le setter pour l'attribut nom. Il prend en argument la valeur qu'aura l'attribut nom.
  public function setLitreEssence($arg)
  {
    $this->litreEssence = $arg;
  }

  public function getLitreEssence()
  {
    return $this->litreEssence;
  }


}

$membre = new Vehicule('Marc');





// creer une class pompe
//  attribut $ litreEssence
// methode getter et setter litre essence et donner Essence failt le plein de lavoiture ajoute 50 litres a son reservoir et soustraire auton de litresau reservoir de la pompe à Essence

class Pompe

{

  private $litreEssence;   // Déclaration des propriétés (ou attributs)


  // Je crée le setter pour l'attribut nom. Il prend en argument la valeur qu'aura l'attribut nom.
  public function setLitreEssence($vehicule)
  {
    $this->litreEssence = $vehicule;
  }

  public function getLitreEssence()
  {
    return $this->litreEssence;
  }

  public function donnerEssence(Vehicule $vehicule)// permet de faire le plein de la voiture signifie que l'on doit instancier de la class véhicule

  {
    $vehicule->setLitreEssence(50);// on fait le plein de la voiture en utilisant le setter pour kitreEssence de la voiture
    $this->setLitreEssence($this->getLitreEssence() - 50);// on retire 50 litre d'essence à la pompe
  }
}

$vehicule = new Vehicule;
$vehicule->setLitreEssence(0);

$pompe = new Pompe;
$vehicule->setLitreEssence(800);

$pompe->donnerEssence($vehicule);
var_dump($vehicule);


// instance un véhicule .
//instancier une pompe setter 0 littres d'essence au véhicule
//setter 800 litres d'essence à la pompe
// faire le plein avec la pompe à essence






?>
