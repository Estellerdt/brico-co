<?php 
  
    $categorie = $_POST['categorie'];
    $tab = $categorie;

    $objet = $_POST['objet'];
    $tab .= ",".$objet;

	$difficulte= $_POST['difficulte'];
	$tab .=",".$difficulte;

    $temps= $_POST['temps'];
    $tab .=",".$temps;

	$steps= $_POST['steps'];
	$tab.=",".$steps;

    $materiaux = $_POST['materiaux'];
    $tab .=",".$materiaux;

    $lien = $_POST['lien'];
    $tab.=",".$lien;
    
 $cout = $_POST['cout'];
    $tab.=",".$cout;


$handle = fopen("tuto-a-valider.csv", "a");
fwrite($handle, "\n".$tab);
fclose($handle);

header("Location:accueil.php");


?>

