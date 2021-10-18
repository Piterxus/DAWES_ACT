<?php
$precio=100;
$cantidad=4;
$base=$precio*$cantidad;
define("IVA",0.21);


echo "IMPORTE FINAL: ".($base+($precio*$cantidad*IVA));




?>