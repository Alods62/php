<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 1</title>

</head>

<body>
    
    <h1>Exercice 2</h1>
    <?php 
    
    $lastname = "dupont";
    $firstname = "toto";
    $age = 15;
//  echo " $lastname<br /> "; // une balise html doit être entre " " ou ' ' pour fonctionner dans un code php 
//  echo " $firstname<br />"; // le contenu de la variable s'affiche entre " " , si on met des ' ' $nomdelavariable va s'afficher
//  echo " $age <br />";
    
    ?>
    
    <p>Il s'appelle <?= $lastname . ' ' . $firstname ?> il à <?= $age ?> ans </p>
    
</body>
</html>