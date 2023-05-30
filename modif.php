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

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: inline-block;
        width: 150px;
        text-align: right;
        margin-right: 10px;
    }

    input[type="password"],
    input[type="text"],
    input[type="date"] {
        width: 200px;
    }

    input[type="submit"] {
        display: block;
        margin: 20px auto;
    }
    a{
    color: #2D9988;
    }
</style>


<body>

<?php include 'entete.php'; ?>
<br><br>


<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier le profil</title>
</head>
<body>
	<header>
		<h1>Modifier le profil</h1>
	</header>


	<a href="/accueil.php">Page Accueil</a>
	<main>
		<section>
			<h2>Informations personnelles</h2>
			
<form name="form" action="modification-profil.php" method="POST">
		
        <label for="password"> Mot de passe: </label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe"><br>
 </div><br><br>
        <label for="confirmationmotdepasse "> Confirmer mot de passe: </label>
        <input type="confirmationmotdepasse" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Entrez votre mot de passe">
<br>
 </div><br><br>
        <div>
            <label for="Prenom "> Prenom: </label>
            <input type="prenom" name="prenom" id="prenom" placeholder="Entrez votre prénom">
        </div><br><br>
        <div>
            <label for="Nom "> Nom: </label>
            <input type="nom" name="nom" id="nom" placeholder="Entrez votre nom">
        </div><br><br>
        
		<div>
		<label>Date de naissance</label> <br>
		<input type="date" name="date"><br><br>
		</div><br><br>

		<input type="submit"  name="valider" value="Creation">
 
 </form>
		</section>
		
	</main>
	
	<br><br><br>
<object data="footer.html" width="100%" height="500px"></object>

<body>
</html>
</body>
</html>


