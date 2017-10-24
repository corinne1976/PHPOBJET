<?php

class Membre
{
  public $id = 15;
  public $pseudo;
  public $mysqlnd_uh_set_statement_proxy;
  public function __construct()
  {
    echo 'Internaute créé <hr>';
  }
    public function inscription()
    {
      return 'je m\'inscris.<br>';
    }
    public function connexion()
    {
        return 'je me connecte.<br>';
    }
}



class Admin extends Membre // la class Admin contient ce qui a la class Membre elle est étendue
{
    public function accesBackOffice()
    {
          return 'Accès back office<br>';
    }

}
$admin = new Admin;
  echo $admin->connexion();
  echo $admin->accesBackOffice();
  echo $admin->id;











 ?>
