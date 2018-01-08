function afficheDonnees(var text){

}
//Envoyer les données dans la base de données
function envoyerDonnees(){
  var xhr = new XMLHttpRequest();
  var url = "envoiDonnees.php?param1=" + document.getElementById('formulaire').value;
  //Récupération de la valeur est ok
  xhr.open("GET", url);
  xhr.send(null);
}
//Fonction de suppression des items sélectionnés
function supprimerDonnees(){
  var formulaire = document.getElementById('form_todo');//Récupérer le formulaire
  for (var i = 0; i < formulaire.elements.length; i++) {
    alert(i);
  }
}
