<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for. Cambia el código
para hacerlo con un while y con un do-while -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//for
for ($i = 0; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        echo $i . "<br>";
    }

}
echo "<br> <br>";
//while
$cont = 0;
while ($cont <= 100) {

    if ($cont % 5 == 0) {
        echo $cont . "<br>";
    }
    $cont++;

}
echo "<br> <br>";

//do while

$cont = 0;

do {
    if ($cont % 5 == 0) {
        echo $cont . "<br>";
    }

    $cont++;

} while ($cont <= 100);

?>
</body>
</html>