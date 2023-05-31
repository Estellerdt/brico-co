<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php include 'entete.php'; ?>
<br><br>
<?php
session_start();

if (isset($_GET['index'])) { // index contient l'endroit ou se situe le commentaire
    $index = $_GET['index'];
    
    // Lecture des commentaires à partir du fichier CSV
    $nom_fichier_csv = "commentaire.csv";
    $commentaires = lire_commentaires($nom_fichier_csv);
    
    
    if (isset($commentaires[$index])) {
        unset($commentaires[$index]); //  supprime l'élément du tableau commentaires qui correspond à la clé $index
        
        // Écriture des commentaires restants dans le fichier CSV
        $handle = fopen($nom_fichier_csv, "w+");
        foreach ($commentaires as $commentaire) {
            fputcsv($handle, $commentaire);
        }
        fclose($handle);
         
            echo "Le commentaire a été supprimé avec succès.";
            echo '<br><a href="profil.php">Retourner au profil</a>';
    } else {
        echo "Index de commentaire invalide.";
    }
} else {
    echo "Index de commentaire non spécifié.";
}

function lire_commentaires($nom_fichier) {
    $commentaires = array();
    if (($fichier = fopen($nom_fichier, 'r')) !== false) {
        while (($ligne = fgetcsv($fichier)) !== false) {
            $commentaires[] = $ligne;
        }
        fclose($fichier);
    }
    return $commentaires;
}
?>
<br><br><br>
<object data="footer.html" width="100%" height="500px"></object>

</body>
</html>
