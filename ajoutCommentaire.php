<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un commentaire</title>
    <meta charset="utf-8"/>
    <style>
       body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background-color: #F5F5DC;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

form {
  max-width: 500px;
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"],
textarea,
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.error {
  color: red;
  margin-bottom: 10px;
}

        </style>
</head>
<body>
    <h1>Ajouter un commentaire</h1>
    
    <form action="ajoutCommentaire.php" method="post">
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br><br>
        
        <label for="motdepasse">Mot de passe :</label>
        <textarea id="motdepasse" name="motdepasse" required></textarea><br><br>
        
        <label for="tuto">tuto :</label>
         <select name="tuto">
          <option>Biblio</option>
          <option>Etageres</option>
          <option>Portemanteau</option>
          <option>Tablebasse</option>
          <option>Balancoire</option>
          <option>Niche</option>
          <option>Fauteuil</option>
          <option>Table</option>
          <option>Bureau</option>
          <option>Etagere</option>
          <option>Penderie</option>
          <option>Tabledechevet</option>
          <option>Etagèresflottantes</option>
          <option>Porteepices</option>
          <option>Table</option>
          <option>Bar</option>
     </select>
        
     <label for="note">Note :</label>
    <select name="note">
        <option value="1">★</option>
        <option value="2">★★</option>
        <option value="3">★★★</option>
        <option value="4">★★★★</option>
        <option value="5">★★★★★</option>
    </select><br><br>
    
    <label for="commentaire">Commentaire :</label>
    <textarea id="commentaire" name="commentaire" required></textarea><br><br>
    
    <input type="submit" value="Ajouter">
</form>
    <br>
    <br>
    </body>
</html>
<?php

function ajouterCommentaire($nom_utilisateur, $mot_de_passe, $commentaire, $tuto, $note) {
    $fichier_utilisateur = "login.csv";
    $fichier_commentaires = "commentaire.csv";

    // Vérifier si le fichier de commentaires existe
    $fichier_existe = file_exists($fichier_commentaires);

    // Construire la ligne de commentaire
    $nouvelle_ligne = $tuto . ',' . $nom_utilisateur . ',' . $commentaire . ',' . $note . ',' . date('Y-m-d') . PHP_EOL;

    if ($fichier_existe) {
        // Ajouter la nouvelle ligne au fichier existant
        file_put_contents($fichier_commentaires, $nouvelle_ligne, FILE_APPEND);
    } else {
        // Créer un nouveau fichier et écrire la nouvelle ligne
        file_put_contents($fichier_commentaires, $nouvelle_ligne);
    }

    $lignes_utilisateur = file($fichier_utilisateur); // lit le contenu du fichier utilisateur et le renvoie sous forme de tableau

    $commentaireAjoute = false;

    foreach ($lignes_utilisateur as $index => $ligne) {
        $utilisateur = str_getcsv($ligne); // utilise les virgules comme délimiteur et renvoie un tableau pour chaque ligne
        if ($utilisateur[2] === $nom_utilisateur && $utilisateur[3] === $mot_de_passe) {
            // Trouvé le bon utilisateur, ajouter le commentaire à la fin de la ligne
            $lignes_utilisateur[$index] = rtrim($ligne) . $tuto . ',' . $commentaire . ',' . $note. ',' . PHP_EOL;
            $commentaireAjoute = true;
            break; // Sortir de la boucle après avoir ajouté le commentaire à l'utilisateur
        }
    }

    if ($commentaireAjoute) {
        echo "Commentaire ajouté avec succès.";
        echo "<a href='accueil.php'>Retourner à l'accueil</a>";
        return true; // Correspondance trouvée et commentaire ajouté
    } else {
        echo "Profil non identifié. Veuillez créer un compte : <p><a href='creation.php'>Sign up</a></p>";
        return false; // Aucune correspondance trouvée
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST["nom_utilisateur"];
	$mot_de_passe = $_POST["motdepasse"];
    $commentaire = $_POST["commentaire"];
    $tuto = $_POST["tuto"];
    $note = $_POST["note"];

    $resultat = ajouterCommentaire($nom_utilisateur, $mot_de_passe, $commentaire,$tuto, $note);
    
    
}
?>
