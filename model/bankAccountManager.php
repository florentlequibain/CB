<?php

// BANK ACCOUNT MANAGER
Class BankAccountManager{

private $_db;


  // CONSTRUCT

  public function __construct($db){
    $this-> setDb($db);
  }

  // SETTER DB
  public function setDb(PDO $db){
    $this->_db = $db;
  }



// C R U D

// SHOW LIST
public function getList()
{
  $requete = $this->_db->prepare( ' SELECT * FROM bankAccount');

  $requete->execute();

  $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);

  return $donnees;
}
//
// // ADD VEHICULE
// public function add($vehicule) {
//
//   $req = $this->_db->prepare('insert into Vehicules (Type, Number_wheels, Color, Price, Cabin_color, Luggage_rest_color)
//                                      values (:Type, :Number_wheels, :Color, :Price, :Cabin_color, :Luggage_rest_color )');
//
//   $req->bindValue(':Type', $vehilcule->getType() );
//   $req->bindValue(':Number_wheels', $vehilcule->getNumber_wheels() );
//   $req->bindValue(':Color', $vehilcule->getColor() );
//   $req->bindValue(':Price', $vehilcule->getType() );
//
//   if ($vehicule->getType() == 'Motorbike') {
//     $req->bindValue(':Luggage_rest_color', $vehicule->getLuggage_rest_color() );
//   }
//   else { $req->bindValue(':Luggage_rest_color', NULL);
//   }
//
//   if ($vehicule->getType() === 'Camion' || 'Car'){
//     $req->bindValue(':Cabin_color', $vehicule->getCabin_color() );
//   }
//   else{ $req->bindValue(':Cabin_color', NULL);
//   }
//
//   $req->execute();
// }

}
