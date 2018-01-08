<!DOCTYPE html>
<html>
  <!--Le head-->
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
     <script src="script.js" type="text/javascript"></script><!--Ajout des scripts javascript-->
    <title>To Do List</title>
  </head>
  <!--Le body-->
  <body>
    <h1>My ToDoList</h1>
    <!--Affichage de la liste-->
    <div id="vue_liste">
      <h3>Mes tâches à faire :</h3>
    </div>
    <!--Le lieu d'ajout de tâche-->
    <div id="ajout">
      <h3>Ajouter à ma liste</h3>
      <form method="post">
        <input id="formulaire" type="text" placeholder="Tapez ici " name="item"/>
        <input type="submit" value="Ajouter" onclick="envoyerDonnees()"/>
      </form>
    </div>
    <!--La suppression des éléments-->
    <div id="suppression">
      <form method="post" action="supprimer.php">
        <input type="submit" value="Supprimer" />
      </form>
    <div>
  </body>
  <!--Le footer-->
  <footer>

  </footer>
<html>
