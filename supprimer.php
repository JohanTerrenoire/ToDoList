<?php
try {
  //Connexion à la base de données.
  $user = 'list';//L'utilisateur pour se connecter
  $mdp = 'passwd';//Son mot de passe
  $machine = 'localhost';//Adresse de la machine où est stockée la base
  $basename = 'ProgWeb';//Nom de la base de données
  $bdd = new PDO('mysql:host='.$machine.';dbname='.$basename.';charset=utf8', $user, $mdp);
  $req = $bdd->prepare('DELETE FROM liste WHERE id = :id');//Preparer la requête
  $id_sup = $_GET['chk_id'];
  $req->bindParam(':id', $id_sup);//Définir la valeur du paramètre
  $req->execute();//Éxécuter la requête
} catch (\Exception $e) {
  //En cas d'erreur d'ouverture de la base, afficher les erreurs.
  die('Erreur : ' . $e->getMessage());
}
 ?>
