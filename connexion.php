
<!DOCTYPE  html>
<html>
<head>
    <meta charset="utf-8"/>
    <style>
        * {
            font-family: arial;
        }
 
     body {
    font-size: 40px;
    color: #666;
    background-color: #F5F5DC;
    font-family: Helvetica, Arial, sans-serif;
    margin: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h1 {
    font-size: 40px;
    color: #2D9988;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

input[type=submit] {
    border: solid 1px #2D9988;
    margin-bottom: 10px;
    padding: 15px;
    outline: none;
    border-radius: 7px;
    width: 120px;
    background-color: #F5F5DC;
    color: #2D9988;
}

input {
    border: solid 1px #2D9988;
    margin-bottom: 10px;
    padding: 16px;
    outline: none;
    border-radius: 7px;
    width: 300px;
}

.erreur {
    text-align: center;
    color: red;
    margin-top: 10px;
}

a {
    font-size: 14pt;
    color: #2D9988;
    text-decoration: none;
    font-weight: normal;
}

a:hover {
    text-decoration: underline;
    color: #2D9988;
}
    </style>
</head>

<body>
<h1>Authentification</h1>



<form name="form" action="verification.php" method="POST">

<h1>Login</h1>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Entrez vore email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Entrez vore mot de passe">
        </div>
        <input type="submit"  name="valider" value="S'authentifier">

        <a href="/creercompte.php">Toujours pas de compte?</a>
 
 </form>





</body>
</html>




