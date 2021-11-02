<?php
$nombre=null;
$edad=44;


if($nombre==null && $edad==null  ){
    echo "Sin datos";
}


if (($nombre==null) && ($edad!=null)){
    echo "Hola desconocido tienes $edad años";
}
if($edad==null && $nombre!=null){
    echo "Hola $nombre no sé tu edad";
}

if($nombre!=null && $edad!=null){
    echo "Hola $nombre tienes $edad años";
}

?>