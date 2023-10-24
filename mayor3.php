<?php 
$primero= $_POST['primero'];
$segundo= $_POST['segundo'];
$tercero= $_POST['tercero'];
if ($primero>$segundo && $primero>$tercero){
    echo "El número $primero es el mayor";
}else if ($segundo>$primero && $segundo>$tercero){
    echo "El número $segundo es el mayor";
}else if ($tercero>$primero && $tercero>$segundo){
    echo "El número $tercero es el mayor";
}


?>