<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PARTIE 2 EXO 2</title>
</head>
<body>
<?php
//  Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100. Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.

    echo "<h3 style='color:red;'>exercice 2: </h3></br>";
    
    $v=rand(1,100);
    for($a=0;$a<=20;$a++){
    echo " le resultat de la multiplication de ".$a." * ".$v." est </br>".$a*$v."</br></br>";
    }

?>
</body>
</html>