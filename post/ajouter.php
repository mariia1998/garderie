<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$datedenaissance = $_POST['datedenaissance'];
$etat = $_POST['etat'];
$nomP = $_POST['nomP'];
$prenomP = $_POST['prenomP'];
$tel = $_POST['tel'];
$numcd = $_POST['numcd'];
$carte=$_POST['carte'];
include '../config.php';
$idp = $_POST['idp'];

if ($idp != '0'){

}else {
  $file_db->exec("INSERT INTO parents (nom,prenom,tel,ncarte,cartes,type) VALUES ('$nom','$prenom','$tel','$numcd','$carte','0') ;") OR print_r($file_db->errorInfo());
  $idp = $file_db->lastInsertId();
}

 $file_db->exec("INSERT INTO enfants (nom,prenom,datedenaissance,etat,id_parents) VALUES ('$nom','$prenom','$datedenaissance','$etat','$idp') ;")OR print_r($file_db->errorInfo());

print $idp;
 ?>
