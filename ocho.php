<?php
define("LIMITE",200);
$al=mt_rand(1,LIMITE); //El ejercicio especifica con rand(). Pero parece ser que esta función es mejor.



echo $al%2==0?"$al es par":"$al es impar";


?>