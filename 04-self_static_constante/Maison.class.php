
<?php
class Maison
{
  public static $espaceTerrain = '500m²';// espace terrain appartient a la class Maison propriété public et static
  public $couleur = 'blanc';//propriété normale
  private static $nbPiece = 7;// proprieté privée et static(accès à un getter)
  const HAUTEUR = '10m';// constante appartient à la classe
    public static function getNbPiece()
  {
    return self::$nbPiece;// self comme le this(pour l'objet) mais c'est pour une classe signifie cette classe
  }
}

echo 'espace terrain : ' . Maison::$espaceTerrain . '<br>';// espace terrain propriete static appartient a la class Maison
$mon_objet = new Maison;
echo 'couleur : ' . $mon_objet->couleur . '<br>';
echo 'Nombre de pieces: ' . Maison::getNbPiece() . '<br>';
echo 'couleur : ' .  Maison::HAUTEUR;




 ?>
