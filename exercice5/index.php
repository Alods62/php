<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 1</title>

</head>

<body>
    
    <h1>Exercice 5</h1>
    <?php 
    
    $int = null; // on peut pas déclarer une variable sans l'initialiser, si on veut qu'elle soit vide on met 'null'
    echo $int;
    $$int = 16;
    echo ${$int};
    
    ?>
    
    
    
</body>
</html>