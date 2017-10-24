
<?php

class Animal
{

  protected function deplacement()
  {
  return 'je me deplace.<br>';
  }
    public function manger()
    {
      return 'je mange chaque jour.<br>';
    }
}

class Elephant extends Animal // la class Admin contient ce qui a la class Membre elle est étendue
{
    public function quiSuiJe()
    {
          return 'je suis un éléphant' . $this->deplacement();
    }

}
class Chat extends Animal // la class Admin contient ce qui a la class Membre elle est étendue
{
    public function quiSuiJe()
    {
          return 'je suis un chat';
    }
public function manger()
{
    return 'je mange comme un chat';
}

}
$eleph = new Elephant;
echo 'Elephant : ' . $eleph->manger() . '<br>';
echo 'Elephant : ' . $eleph->quiSuisJe() . '<br>';

$chat = new Chat;
echo 'Chat : ' . $eleph->manger() . '<br>';
echo 'Chat : ' . $eleph->quiSuisJe() . '<hr>';
// remarquez que la méthode manger() de la class chat réécrit la méthode manger() de la class Animal


  ?>
