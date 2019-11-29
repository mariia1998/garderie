<!doctype html>
<?php
include "inc/navbar.php";
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" >
    <link rel="stylesheet" href="css/garderie.css">


  </head>
  <body>


<div class="leftBar">
<div class="inner">
<span class="fa fa-search"></span>
<input type="text" class="form-control form-control-sm fa fa-search" name="" value="Rechercher..." >
</div>


<ul>
  <li onclick="affichertab('ajouter');">+</li>
  <li onclick="affichertab('list');">L</li>
</ul>

</div>


<div class="mainBar">

<div class="ajouter tab2">


  <form class="addForm">
<div class="card">
<div class="card-header">

<h3>AJOUTER</h3>
</div>
<div class="card-body">
<input type="hidden" name="" id="idp" value="0">

<table class="form">

<tr>
  <td>Nom</td>
  <td>  <input type="text" class="form-control" id="nom"></td>
</tr>
<tr>
  <td>Prenom</td>
  <td>  <input type="text" class="form-control" id="prenom"></td>
</tr>
<tr>
  <td>date de naissance</td>
  <td>  <input type="text" class="form-control" id="datedenaissance"></td>
</tr>
<tr>
  <td>etat</td>
  <td><div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="etat">
  <label class="custom-control-label" for="customSwitch1"></label>
</div></td>
</tr>

<tr>
</table>
<hr>
<table class="form">
  <tr>
    <td>carte</td>
    <td>  <textarea   class="form-control" id="carte" rows="2"></textarea></td>
  </tr>
  <td>Nom du parent</td>
  <td> <input type="text" class="form-control" id="nomP"></td>
</tr>
<tr>
  <td>Prenom du parent</td>
  <td> <input type="text" class="form-control" id="prenomP"></td>
</tr>
<tr>
  <td>telephone</td>
  <td>      <input type="text" class="form-control" id="tel"></td>
</tr>
<tr>
  <td>carte d'identité</td>
  <td> <input type="text" class="form-control" id="numcd">
</td>
</tr>
</table>



















  </div>
  <div class="card-footer">

    <button type="submit" class="btn btn-primary float-right">confirmer</button>
  </div>
  </div>


  </form>


</div>
<div class="list afficher tab2">
LISTE DES ENFANTS

</div>

</div>





  </body>

  <script src="js/frequency.js" charset="utf-8"></script>
  <script src="js/dashboard.js" charset="utf-8"></script>
</html>
