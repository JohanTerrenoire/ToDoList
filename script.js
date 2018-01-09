//Envoyer les données dans la base de données
function envoyerDonnees(){
  var xhr = new XMLHttpRequest();
  var url = "envoiDonnees.php?param1=" + document.getElementById('formulaire').value;
  //Récupération de la valeur est ok
  xhr.open("GET", url);
  xhr.send(null);
}
//Fonction de suppression des items sélectionnés
function supprimerDonnees(checkbox){
  for (var i=0; i<checkbox.length;i++) {
    if (checkbox[i].checked == true) {
      alert(checkbox[i].value);
    }
  }
}
