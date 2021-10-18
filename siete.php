<?php
$nomina=1250;

if ($nomina<800){
    $nomina=$nomina+($nomina*20/100);
}elseif($nomina==800 || $nomina<=1200){
    $nomina=$nomina;
}elseif($nomina>1200){
    $nomina=$nomina-($nomina*15/100);
}

echo $nomina;




?>