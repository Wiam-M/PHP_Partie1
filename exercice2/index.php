<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
</head>
<body>
    <h3>Exercice 2 : Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase ex: Je m'appelle "nom prénom" et j'ai "age" ans.</h3>
    <?php
    $firstName = "Wiam";
    $lastName = "Malek";
    $age = 26;
    $identity = "Je suis ". $firstName ." " .$lastName . " j'ai " . $age. " ans";
    echo $identity;

    // on peut concaténer de cette façon;
    //output est : Wiam Malek
    // $firstName .= ' '. $lastName;
    // echo $firstName;

    //ou un affichage standard au lieu de + c'est un .
    // echo("Je suis ". $firstName ." " .$lastName . " j'ai " . $age. " ans")
    ?>
</body>
</html>