<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6.2</title>
</head>

<body>
    <?php

    $randoms = array();
    $positivos = array();
    $negative = false;
    $cont = 0;
    $contP = 0;
    $media = 0;


    for ($i = 0; $i < 15; $i++) {
        $r = rand(-5, 20);
        $randoms[$i] = $r;
        echo "r" . $randoms[$i] . "<br>";
    }


    echo "<br><br>";
    while ($negative == false) {


        if ($randoms[$cont] >= 0) {
            $positivos[$contP] = $randoms[$cont];
            $contP++;
        } else {
            $negative = true;

            for ($i = 0; $i < sizeof($positivos); $i++) {
                echo "p" . $positivos[$i] . "<br>";
                $media = $media + $positivos[$i];
            }
        }
        $cont++;
    }

    echo "<br>";

    if (count($positivos) > 0 && count($positivos) != 1) {
        echo "Media: " . round(($media / count($positivos)), 2);
    } else if (count($positivos) == 1) {
        echo "Solo hay un valor positivo: " . $positivos[0];
    } else {
        echo "No se inicializa el programa, primer número del Array negativo.";
    }



    ?>
</body>

</html>