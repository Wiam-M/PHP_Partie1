<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h3>Exercice 3: Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.</h3>
    <?php
    function displayMajorOrMinor($age){
        if($age < 0 || $age >200){
            echo "Vous êtes peut etre pas là! ou plus là =D";
            return;
        }
        if ($age >= 18) {
           echo "Vous êtes majeur";
        }
        else{
            echo "Vous êtes encore mineur :) ";
        }
    };
    displayMajorOrMinor(25)
    ?>
</body>
</html>