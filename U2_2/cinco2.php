<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5.2</title>
</head>

<body>
    <?php


    $randoms = array();
    $zero = false;
    $cont = 0;



    do {
        $cont++;
        $r = rand(-15, 15);
        $randoms[$cont] = $r;
        if ($randoms[$cont] == 0) {
            echo "<p>Valor igual a 0. Para el programa.</p><br>";
            $zero = true;
        } else {
            if ($randoms[$cont] < 0) {
                echo "Negativo: " . $randoms[$cont] . "<br>";
            } else {
                echo "Positivo: " . $randoms[$cont] . "<br>";
            }
        }
    } while ($zero == false);

    ?>

</body>

</html>