<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.</h1>
    <ol>
    <li> Micro-séisme impossible à ressentir</li>
    <li>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres</li>
    <li>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti</li>
    <li>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats</li>
    <li>Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes</li>
    <li>Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre</li>
    <li>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance</li>
    <li>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres</li>
    <li>Séisme capable de tout détruire sur une très vaste zone</li>
    </ol>
    <?php


    $magnitude = random_int(0,9);

    $a = 1;

    $magnitudes = array(
                0 => "Not found",
                1 => "Micro-séisme impossible à ressentir",
                2 => "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres",
                3 => "3",
                4 => "4",
                5 => "5",
                6 => "6",
                7 => "7",
                8 => "8",
                9 => "9",
            );
  

    function displayMessage($key){
            global $magnitudes;
            echo $magnitudes[$key];   
        }

        displayMessage($magnitude)

    // function displayMessage($value){
    //     switch ($value) {
    //         case 0:
    //             echo "Not found";
    //             break;
    //         case 1:
    //             echo "Micro-séisme impossible à ressentir";
    //             break;
    //         case 2:
    //             echo "i égal 2";
    //             break;
    //         case 3:
    //             echo "i égal 3";
    //             break;
    //         case 4:
    //             echo "i égal 4";
    //             break;
    //         case 5:
    //             echo "i égal 5";
    //             break;  
    //         case 6:
    //             echo "i égal 6";
    //             break;  
    //         case 7:
    //             echo "i égal 7";
    //             break;  
    //         case 8:
    //             echo "i égal 8";
    //             break;  
    //         case 9:
    //             echo "i égal 9";
    //             break;                 
    //     }
    // }

    // displayMessage($magnitude);
    
    ?>
</body>
</html>