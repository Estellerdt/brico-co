<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Brico & co</title>
  <style>
body {
      font-size: 20px;
      color: #666;
      background-color: #F5F5DC;
      font-family: Helvetica, Arial, sans-serif;
    }

    .logo {
  position: absolute;
  display:flex;
  /* align-items: center;
   justify-content: center; */
   top: 20%;
  right:0%;
  
    }
    
    .logo img {
      width: 200px; /* Ajustez la taille selon vos besoins */
    }

    h2 {
      font-size: 70px;
      color: #333;
      text-align: center;
    }

    .txt {
      text-align: center;
      font-size: 25px;
      line-height: 1.5;
      margin: 20px;
    }
    
     .image{
     position: absolute;
  display:flex;
    }
      .image img {
      width: 200px; /* Ajustez la taille selon vos besoins */
    }

     
  </style>

</head>
<body>

<?php include 'entete.php'; ?>

  <h2>Brico&Co</h2>


<div class="logo">
  <img src="images/logo.png" alt="Brico&Co Logo">
</div>

<br><br>
<p class="txt">
  Que vous soyez propriétaire ou locataire, les occasions ne manqueront pas d'exercer vos talents de bricoleur chez vous. Si certains semblent être nés avec un marteau à la main, d'autres redoutent de devoir faire un simple trou dans un mur. Ces derniers ont aussi la meilleure des excuses : ils n'ont pas le matériel adéquat. Parce que nous pensons qu'il est de notre devoir d'aider le bricoleur du dimanche, voici quelques tutoriels pour vous aider dans vos différents bricolages.
  <br>
  En préparant soigneusement votre projet bricolage, vous êtes serein et vos travaux se passent dans le calme. Pour réussir vos travaux de bricolage, n’oubliez pas d’être organisés et prudents !
</p>
<br>
<div class="image">
  <img src="images/brico.jpg" alt="Image 1">
</div>
<br><br><br>
<br><br><br>
<object data="footer.html" width="100%" height="500px"></object>
</body>

</html>
