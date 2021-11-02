<!-- Una empresa necesita una página para gestionar las facturas. En cada factura figura: el
código del artículo, la cantidad vendida en litros y el precio por litro. Se pide introducir en un
array multidimensional 5 facturas introducidas e indicar la Facturación total, cantidad en litros
vendidos del artículo 1 y cuantas facturas se emitieron de más de 600 €. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9.2</title>
</head>

<body>
    <?php

    $facturas = array(array('Código' => 'ABC', 'Litros' => 290, 'Precio' => 780), array('Código' => 'EFG', 'Litros' => 1500, 'Precio' => 400), array('Código' => 'HIJ', 'Litros' => 10, 'Precio' => 50), array('Código' => 'KLM', 'Litros' => 30, 'Precio' => 200), array('Código' => 'NÑO', 'Litros' => 356, 'Precio' => 100));
    $facturacionTotal = 0;
    $mas600 = 0;


    for ($fila = 0; $fila < sizeof($facturas); $fila++) {
        $total = ($facturas[$fila]['Litros'] * $facturas[$fila]['Precio']);
        $facturacionTotal = $facturacionTotal + $total;
        if ($total > 600) {
            $mas600++;
        }
    }
    echo "La facturación total es de: " . $facturacionTotal . "<br>";
    echo "Del Artículo 1, Código: " . $facturas[0]['Código'] . "Se han vendido: " . $facturas[0]['Litros'] . " litros. <br>";
    echo "El total de facturas de más de 600 € es: " . $mas600;


    ?>
</body>

</html>