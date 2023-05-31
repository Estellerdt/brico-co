<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Fortunel Alizé, Trepos Pauline, Estelle Roudet, Laverton Agath, Aude Souchon">
<title>Brico & co</title>

    <style>
        body {
            font-size: 16px;
            color: #666;
            background-color: #F5F5DC;
              font-family: Helvetica, Arial, sans-serif;
        }

        h1 {
            font-size: 32px;
            color: #333;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .categorie {
            float: left;
            font-weight: bold;
        }

        .id {
            text-align: center;
            font-size: 55px;
            font-weight: bold;
            padding-top: 20px;
            padding-bottom: 20px;
        }


        .difficulte {
            background-color: beige;
            text-align: center;
            font-size: 24px;
            padding-top: 20px;
            padding-bottom: 20px;
            width: 30%;
            margin: 0 auto;
        }

        .temps {
            background-color: beige;
            text-align: center;
            font-size: 24px;
            padding-top: 20px;
            padding-bottom: 20px;
            width: 30%;
            margin: 0 auto;
        }

        .etapes {
            background-color: #2D9988;
            text-align: center;
            font-size: 28px;
            padding-top: 20px;
            padding-bottom: 20px;
            display: inline-block;
            margin: 20px;
            width: 40%;
            border: 2px solid #8B4513;
            vertical-align: top;
             color: white;
             font-family: Helvetica, Arial, sans-serif;
        }

        .materiaux {
            background-color: #2D9988;
            text-align: center;
            font-size: 30px;
            padding-top: 20px;
            padding-bottom: 20px;
            width: 50%;
            display: inline-block;
            margin: 20px;
            border: 2px solid #8B4513;
            vertical-align: top;
            color: white;
            font-family: Helvetica, Arial, sans-serif;
        }
        .image {
   margin-top: 10px;
  display: flex;
  justify-content: center;
  
}
        .image img {
     max-width: 250px;
}

    </style>
</head>

<body>

<?php include 'entete.php'; ?>
<br><br>

<?php
session_start();
?>

<?php if( isset($_SESSION['email']) && $_SESSION['email'] == "popo@gmail.com" ) :?>
 

<?php 

  // Ouvrir le fichier CSV en mode lecture
    $fichier = fopen("tuto-a-valider.csv", "r");

 //Parcourir le fichier et rechercher la ligne correspondante au tuto
    while (($ligne = fgetcsv($fichier)) !== false) {
            // Afficher les données de la ligne
        echo "<div class='categorie'> " . $ligne[0] . "</div>";
        echo "<div class='id'>" . $ligne[1] . "</div>";
         echo "<div class='image'><img src='" . $ligne[6] . "' alt='image'></div>";
        echo "<div class='temps'> Difficulte :" . $ligne[2] . "</div>";
        echo "<div class='temps'>Temps :" . $ligne[3] . "</div>";
        echo "<div class='etapes'>" . nl2br(str_replace('-','<br><br>', $ligne[4])) . "</div>";
        echo "<div class='materiaux'>" . nl2br(str_replace('-','<br><br>', $ligne[5])) . "</div>";
        

    }
    

    fclose($fichier);

?>
<br><br><br>

<br><br><br>
<object data="footer.html" width="100%" height="500px"></object>

<?php else : ?>

    <form name="form" action="EnvoieTuto-User-Admin.php" method="POST">
                
        <div>
            <label for="categorie">Categorie</label>
            <input type="categorie" name="categorie" id="categorie" placeholder="Quel est la categorie de l'objet??">
        </div><br><br>
        <div>
            <label for="objet">Objet</label>
            <input type="objet" name="objet" id="objet" placeholder="Quel est votre objet?">
        </div><br><br>
        
	<div>
        <label for="difficulte"> Difficulte</label>
        <input type="difficulte" name="difficulte" id="difficulte" placeholder="Niveau de difficulte">
        </div><br><br>

	<div>
        <label for="temps"> Temps d'execution</label>
        <input type="temps" name="temps" id="temps" placeholder="temps d'execution">
        </div><br><br>


        <div>
            <label for="steps">Etapes</label>
            <input type="steps" name="steps" id="steps" placeholder="Les differentes étapes">
        </div><br><br>

        <div>
            <label for="materiaux">Materiaux</label>
            <input type="materiaux" name="materiaux" id="materiaux" placeholder="Les differents materiaux">
        </div><br><br>

        <div>
            <label for="lien">Image</label>
            <input type="lien" name="lien" id="lien" >
        </div><br><br>
        
        <div>
            <label for="cout">Cout</label>
            <input type="cout" name="cout" id="cout" >
        </div><br><br>
            

        <input type="submit"  name="valider" value="Creation">
 
 </form>

<?php endif; ?>


 </body> 
</html>
