<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Exercice 5: Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez xans ou vous êtes un homme et vous avez xans.</h3>
    <?php
        $age = random_int(1,100);
        $womenManArray = array('Women', 'Man');
        $randIndexWomenManArray = array_rand($womenManArray);
        // var_dump( $randIndexWomenManArray );
        $womenManGender = $womenManArray[$randIndexWomenManArray];
        // var_dump( $womenManGender);
        echo "You are a " . $womenManGender. " and you are  ". $age . " years old";
    ?>
</body>
</html>