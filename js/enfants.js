
var liste =[];


function Actualiser() {
  var search = $('#search').val();
  $.ajax({
    dataType: "json",
    url: 'json/jsonenfants.php?search='+search,
    success: function(resultats){

      liste=resultats;
      AfficherResultats();


    }
  });
}

function AfficherResultats() {
  var html = '', nombre=0;
  for (var i = 0; i < liste.length; i++) {
    html +='<tr ondblclick="Editer('+liste[i].id+')"><td>'+liste[i].id+'</td><td>'+liste[i].nom+'</td><td>'+liste[i].prenom+'</td><td>'+liste[i].etat+'</td></tr>';
   nombre++;
  }

  $('#res').html(html);
  $('#count').html(nombre);
}






Actualiser();
