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
    <div id="conteneur">
      <h1>My ToDoList</h1>
      <div id="vue_liste">
    <!--Affichage de la liste-->
    <fieldset>
        <legend><h3>Mes tâches à faire :</h3></legend>
        <?php
            try {
              //Connexion à la base de données.
              $user = 'list';//L'utilisateur pour se connecter
              $mdp = 'passwd';//Son mot de passe
              $machine = 'localhost';//Adresse de la machine où est stockée la base
              $basename = 'ProgWeb';//Nom de la base de données
              $bdd = new PDO('mysql:host='.$machine.';dbname='.$basename.';charset=utf8', $user, $mdp);
              $tablename = 'liste';//Nom de la table
            } catch (Exception $e) {
              //En cas d'erreur d'ouverture de la base, afficher les erreurs.
              die('Erreur : ' . $e->getMessage());
            }
            try {
              $reponse = $bdd->query('SELECT * FROM liste');
            } catch (Exception $e) {
              die('Erreur : ' . $e->getMessage());
            }
            echo "<form id='form_todo'>";
            $i = 1;
              while ($donnees = $reponse->fetch()){
                echo "<input name='chk' id='".$donnees['id']."' type='checkbox' value='".$donnees['item']."' >".$donnees['item']."<br/>";
                $i++;
              }
            echo"<input type='submit' value='Supprimer' onclick='supprimerDonnees(this.form.chk)'/>";
            echo"</form>";
        ?>
      </fieldset>
      </div>
      <!--Le lieu d'ajout de tâche-->
      <div id="ajout">
        <fieldset id="ajout">
          <legend><h3>Ajouter à ma liste :</h3></legend>
          <form method="post" id="ajout">
            <input type="text" placeholder="Tapez ici " name="item"/>
            <input type="submit" value="Ajouter" onclick="envoyerDonnees()"/>
          </form>
        </fieldset>
      </div>
    </div>
  </body>
  <!--Le footer-->
  <footer>

  </footer>
<html>
