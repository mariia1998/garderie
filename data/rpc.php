<?php
include '../config.php';

$carte=$_POST['c'];
$n = 0;


$result_one = $file_db->query("SELECT cartes FROM parents WHERE cartes LIKE '$carte'")AS  ;
if(cartes!=''){
  $n = carte;
}else{

}

print $n;

 ?>
