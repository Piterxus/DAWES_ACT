<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10.2</title>
</head>

<body>
    <?php
    // Crear un array multidimensional con los siguientes datos de hoteles:

    $hoteles = array(array("Nombre" => "Abashiri (NH)", "Cat" => 3, "Hab" => 168, "Población" => "46013 Valencia", "Dirección" => "Avenida Ausias March, 59 "), array("Nombre" => "Abba Acteon (Abba Hoteles)", "Cat" => 4, "Hab" => 189, "Población" => "46023 Valencia", "Dirección" => "Escultor Vicente Bertán Grimal, 2 "), array("Nombre" => "Acta Atarazanas", "Cat" => 4, "Hab" => 42, "Población" => "46011 Valencia", "Dirección" => "Plaza Tribunal de las Aguas, 4 "), array("Nombre" => "Acta del Carmen", "Cat" => 3, "Hab" => 25, "Población" => "46003 Valencia", "Dirección" => "Blanquerías, 11 "), array("Nombre" => "AC Valencia (AC Hotels)", "Cat" => 4, "Hab" => 183, "Población" => "46023 Valencia", "Dirección" => "Avenida de Francia, 67 "), array("Nombre" => "Ad Hoc Monumental Valencia", "Cat" => 3, "Hab" => 28, "Población" => "46003 Valencia", "Dirección" => "Boix, 4 "), array("Nombre" => "Alkazar", "Cat" => 1, "Hab" => 18, "Población" => "46002 Valencia", "Dirección" => "Mosén Femades, 11 "));

    function lista($var)
    {
        for ($i = 0; $i < sizeof($var); $i++) {


            if (gettype($var[$i]["Cat"]) == "integer") {
                $a = "<strong>Nombre: </strong>" . $var[$i]["Nombre"] . " <strong>Categoria:  </strong>" . $var[$i]["Cat"] . "* <strong>Habitaciones:  </strong>" . $var[$i]["Hab"] . " <strong>Población:  </strong>" . $var[$i]["Población"] . " <strong>Dirección:  </strong>" . $var[$i]["Dirección"] . "<br><br>";
            }
            if (gettype($var[$i]["Cat"]) == "string") {
                $a = "<strong>Nombre: </strong>" . $var[$i]["Nombre"] . " <strong>Categoria:  </strong>" . $var[$i]["Cat"] . " <strong>Habitaciones:  </strong>" . $var[$i]["Hab"] . " <strong>Población:  </strong>" . $var[$i]["Población"] . " <strong>Dirección:  </strong>" . $var[$i]["Dirección"] . "<br><br>";
            }


            echo $a;
        }

        if (sizeof($var) == 0) {
            echo "La base de datos de hoteles está vacía. <br>";
        }
    }
    lista($hoteles);

    function masdecien($var)
    {

        for ($i = 0; $i < sizeof($var); $i++) {

            if ($var[$i]["Hab"] > 100) {
                echo $var[$i]["Nombre"] . " tiene más de 100 habitaciones. <br><br>";
            }
        }
    }
    masdecien($hoteles);

    function menosde100_3($var)
    {
        for ($i = 0; $i < sizeof($var); $i++) {

            if ($var[$i]["Hab"] < 100 && $var[$i]["Cat"] == 3) {
                echo $var[$i]["Nombre"] . "tiene menos de 100 habitaciones y *** <br><br>";
            }
        }
    }
    menosde100_3($hoteles);



    unset($hoteles[3]);
    $hoteles = array_values($hoteles);

    lista($hoteles);

    unset($hoteles[0]);
    unset($hoteles[1]);
    unset($hoteles[2]);
    unset($hoteles[3]);
    unset($hoteles[4]);
    unset($hoteles[5]);
    $hoteles = array_values($hoteles);
    lista($hoteles);


    array_push($hoteles, array("Nombre" => "Astoria Palace (Ayre Fiesta)", "Cat" => 4, "Hab" => 204, "Población" => "46002 Valencia", "Dirección" => "Plaza Rodrigo Botet, 5 "));
    array_push($hoteles, array("Nombre" => "Balneario Las Arenas", "Cat" => "Lujo", "Hab" => 253, "Población" => "46011 Valencia", "Dirección" => "Eugenia Viñes, 22-24 "));

    echo "<br>";

    lista($hoteles);
    ?>
</body>

</html>