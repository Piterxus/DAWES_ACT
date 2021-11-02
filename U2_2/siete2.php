<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7.2</title>
</head>

<body>
    <?php
    $randoms = array();
    $positives = array();
    $negatives = array();
    $contPosi = 0;
    $contNeg = 0;
    $contZeros = 0;
    for ($i = 0; $i <= 10; $i++) {
        $r = rand(-10, 10);

        $randoms[$i] = $r;
    }
    for ($i = 0; $i < count($randoms); $i++) {

        if ($randoms[$i] == 0) {
            $contZeros++;
        } else if ($randoms[$i] < 0) {
            $negatives[$contNeg] = $randoms[$i];
            $contNeg++;
        } else if ($randoms[$i] > 0) {
            $positives[$contPosi] = $randoms[$i];
            $contPosi++;
        }
    }

    echo "Cantidad de ceros: " . $contZeros;
    echo "<br>";
    echo "Media de positivos: " . round((count($positives)), 2);
    echo "<br>";
    echo "Media de negativos: " . round((count($negatives)), 2);





    ?>
</body>

</html>