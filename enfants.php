
<?php
$recherche = false;

include "inc/navbar.php";
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" >
    <link rel="stylesheet" href="css/garderie.css">

    <title></title>
  </head>
  <body>


    <div class="leftBar">
    <div class="inner">
    <span class="fa fa-search"></span>
    <input type="text" id="search" oninput="Actualiser()" placeholder="recherche..." class="form-control form-control-sm" name="" value="">
    <hr>
<h1 align="center" id="count">0</h1>
<hr>
<button class="btn btn-block btn-warning btn-sm" type="button" name="Modifier" onclick="EditActive()"><i class="fa fa-edit"></i></button>
<button class="btn btn-block btn-danger btn-sm" type="button" name="Supprimer" onclick="supprimer()"><i class="fa fa-trash"></i></button>

    </div>
</div>
<div class="mainBar">

<table class="table table-bordered table-stripped " >
<thead class="bg-warning">
  <tr>
    <th>N</th>
    <th>NOM</th>
    <th>PRENOM</th>

    <th>etat</th>

  </tr>
</thead>
<tbody id="res" style="background-color:">

</tbody>

</table>

  </body>
</div>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/enfants.js"></script>
</html>
