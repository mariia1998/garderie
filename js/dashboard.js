var ajax = frequency;
function affichertab(tab) {
if (_('.tab2.afficher')) _('.tab2.afficher').classList.remove('afficher');
_('.'+tab).classList.add('afficher');

}

_('.addForm').addEventListener('submit',function(e){
  e.preventDefault();
var data = [];
data.push('idp='+_("#idp").value);
data.push('nom='+_("#nom").value);
data.push('prenom='+_('#prenom').value);
data.push('datedenaissance='+_('#datedenaissance').value);
data.push('etat='+_('#etat').value);
data.push('nomP='+_('#nomP').value);
data.push('prenomP='+_('#prenomP').value);
data.push('tel='+_('#tel').value);
data.push('numcd='+_('#numcd').value);
data.push('carte='+_('#carte').value);



ajax.post('post/ajouter.php',data.join('&'),function(rr){
console.log(rr);
})
})

_('#carte').addEventListener('keypress',function(e){
  if (e.keyCode == 13) rechercheParCarte();
})

function rechercheParCarte(){
  ajax.get('data/rpc.php?c='+_('#carte').value,function(r){
    _('#idp').value = r;
  })
}
