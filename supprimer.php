<?php
  require 'vendor/autoload.php';//L'autoloader de mustache
  Mustache_Autoloader::register();
  $m = new Mustache_Engine(array('loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views'),));//Charger la vue de liste

  //Connexion à la base de données.
  $user = 'list';//L'utilisateur pour se connecter
  $mdp = 'passwd';//Son mot de passe
  $machine = 'localhost';//Adresse de la machine où est stockée la base
  $basename = 'ProgWeb';//Nom de la base de données
  $bdd = new PDO('mysql:host='.$machine.';dbname='.$basename.';charset=utf8', $user, $mdp);
  $req = $bdd->prepare('DELETE FROM ’liste‘ WHERE ‘item’ = :item');//Preparer la requête
  $item_sup = $_GET['item'];
  $req->bindParam(':item', $item_sup);//Définir la valeur du paramètre
  $req->execute();//Éxécuter la requête
 ?>
