<!DOCTYPE  html>
<html>
<head>
    <meta charset="utf-8"/>
    <style>
       * {
            font-family: arial;
        }
 
        body {
            margin: 20px;
        }
 
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }
 
        input {
            border: solid 1px blue;
            margin-bottom: 5px;
            padding: 16px;
            outline: none;
            border-radius: 7px;
            width: 300px;
        }

/* Set a style for all buttons */
        input[type=submit] {
        background-color: #53af57;
        color: white;
        padding: 5px;
        margin: 8px;
        border: none;
        cursor: pointer;
        width: 100%;
}
        input[type=submit]:hover {
        background-color: white;
        color: #53af57;
        border: 1px solid #53af57;
}
    </style>
</head>

<body>

<form name="form" action="creation.php" method="POST">
		<div>
            <label for="Email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Entrez vore email">
        </div><br>
		<div>
            <label for="Confirmationemail">Confirmation email:</label>
            <input type="confirmationemail" name="confirmationemail" id="confirmationemail" placeholder="Confirmez vore email">
        </div><br><br>

        <label for="password"> Mot de passe: </label>
        <input type="password" name="password" id="password" placeholder="Entrez vore mot de passe">

        <label for="confirmationmotdepasse "> Confirmation mot de passe: </label>
        <input type="confirmationmotdepasse" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Entrez vore mot de passe">

        <div>
            <label for="Prenom "> Prenom: </label>
            <input type="prenom" name="prenom" id="prenom" placeholder="Entrez vore prénom">
        </div><br><br>
        <div>
            <label for="Nom "> Nom: </label>
            <input type="nom" name="nom" id="nom" placeholder="Entrez vore nom">
        </div><br><br>
        
		<div>
		<label>Date de naissance</label> <br>
		<input type="date" name="date"><br><br>
		</div><br><br>

		<input type="submit"  name="valider" value="Creation">
 
 </form>


 </body> 
</html>
