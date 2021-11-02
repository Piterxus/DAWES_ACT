<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8.2</title>
</head>

<body>
    <?php

    $alumnos = array(array('Nombre' => 'Elvis', 'Estatura' => 1.30, 'Edad' => 7), array('Nombre' => 'Pedro', 'Estatura' => 1.72, 'Edad' => 44), array('Nombre' => 'Helen', 'Estatura' => 1.65, 'Edad' => 41), array('Nombre' => 'Juan', 'Estatura' => 1.80, 'Edad' => 16), array('Nombre' => 'Lola', 'Estatura' => 2.0, 'Edad' => 30));
    $contEdad = 0;
    $contEsta = 0;
    $contMayor = 0;
    $contAlt = 0;

    for ($fila = 0; $fila < sizeof($alumnos); $fila++) {

        $contEdad = $contEdad + $alumnos[$fila]['Edad'];
        $contEsta  = $contEsta + $alumnos[$fila]['Estatura'];

        if ($alumnos[$fila]['Edad'] > 18) {
            $contMayor++;
        }
        if ($alumnos[$fila]['Estatura'] > 1.75) {
            $contAlt++;
        }
    }

    echo "Media edad: " . $contEdad / 5 . "<br>";
    echo "Media estatura: " . $contEsta / 5 . "<br>";
    echo "Cantidad de mayores de edad: " . $contMayor . "<br>";
    echo "Cantidad de alumnos de más de 1.75 m: " . $contAlt;



    ?>
</body>

</html>