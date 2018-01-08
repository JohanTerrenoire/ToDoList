function getDonnees(){

}
function envoyerDonnees(){
  var xhr = new XMLHttpRequest();
  var url = "envoiDonnees.php?param1=" + document.getElementById('formulaire').value;
  //Récupération de la valeur est ok
  xhr.open("GET", url);
  xhr.send(null);
}
