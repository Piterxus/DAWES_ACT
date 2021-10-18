<?php
$codigo=1;
$nombre="Tom";
$apellidos="Smith";
$puesto="Vendedor";
$sueldo=75000;
$edad=26;
$num_hijos=0;
$sucursal="New York";



if ($puesto=="Vendedor" && $sueldo>70000){
    $sueldo=$sueldo-($sueldo*15/100);
}else{
    $sueldo=$sueldo-($sueldo*20/100);
}


if ($edad>50 || $num_hijos>2){
    $sueldo=$sueldo-($sueldo*5/100);
}else{
    $sueldo=$sueldo-($sueldo*10/100);
}

if ($sueldo>50000 && $sueldo<80000){
    $sueldo=$sueldo-($sueldo*5/100);
}else{
    $sueldo=$sueldo-($sueldo*12/100);
}

if ($num_hijos>1 && $num_hijos<=2){
    $sueldo=$sueldo-($sueldo*10/100);
}else{
    $sueldo=$sueldo-($sueldo*5/100);
}

if ($sueldo>80000 && $num_hijos==0){
    $sueldo=$sueldo-($sueldo*15/100);
}else{
    $sueldo=$sueldo-($sueldo*5/100);
}

echo($sueldo);

?>