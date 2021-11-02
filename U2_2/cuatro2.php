<!-- Programa que muestre en pantalla la tabla de multiplicar del 1 al 10 con el formato -->
<!-- Tabla del 2
************
2 x 1 = 2
2 x 2 = 4
... -->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4.2</title>
</head>

<body>
    <?php

    for ($i = 0; $i <= 10; $i++) {
        $multiplo = 2 * $i;
        echo "2 x " . $i . "=" . $multiplo . "<br>";
    }




    ?>
</body>

</html>