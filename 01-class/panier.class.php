
<?php
// panier.class

class Panier// class modele dans lequel on va mettre du code
{
public $nbProduits; // une proprieté
public function ajouterArticle()// une methode
{
  return 'L\'aricle a été ajouté';
}
public function retirerArticle()
{
  return 'L\'aricle a été retiré';
}

public function affichagerArticle()
{
  return 'Voici les articles';
}

}

$panier1 = new Panier;// objet de la class panier j'instancie un objet $panier1 un objet est un espace  independant memoire qui peut contenir des classes et des méthodes
$panier1->nbproduits = 5; // j'attribut 5 à la propriété nbproduits de l'objet panier1 pas d'espace entre la flèche

var_dump($panier1);

echo $panier1->affichagerArticle() . '<br />';// j'appelle la méthode affichagerArticle() depuis l'objet $panier1.

$panier2 = new Panier;
$panier2->nbProduits = 7;

var_dump($panier2);




 ?>
