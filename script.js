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
  var chk_sel = false;
  for (var i=0; i<checkbox.length;i++) {
    if (checkbox[i].checked == true) { //Si il y a au moins un élément sélectionné
      chk_sel = true;
    }
  }
  if (chk_sel == false) { //Si aucun élément est sélectionné, message d'erreur
    alert("Vous n'avez sélectionné aucun élément.");
  }
  else {
    var xhr = new XMLHttpRequest();
    for (var i=0; i<checkbox.length;i++) { //Parcours du formulaire
      if (checkbox[i].checked == true) { //Si la checkbox est cochée
        var url = "supprimer.php?chk_id=" + checkbox[i].id;
        xhr.open("GET", url);
        xhr.send(null);
        document.getElementById(checkbox[i].id).remove();
      }
    }
  }
}
