<?php


class Etudiant{
  private $prenom;
  public function __construct($arg)// methode magique qui est apple automatiquement quand on cree un nouvel argument
  {
    echo ' Instanciation, nous avons reçu l\'argument suivant : ' . $arg;
    $this->setprenom($arg);// il nous nous faut un moyen pour recuper le prenom $this

  }

  public function setPrenom($arg)// il donne une valeur a l'attribut prénom
  {
    $this->prenom = $arg;
  }
  public function getPrenom()// il recuper la valeur
  {
    return $this->prenom;
  }

}
$etudiant = new Etudiant('Marc');

$etudiant = new Etudiant('julien');
var_dump($etudiant);
























?>
