<?php

/*$nombre="Soy Fabian Quintero";
echo($nombre);*/


$producto1='arroz';
$producto2='Panela';
$producto3='papa';
$producto4='Cerveza';
$producto5='Pasta';
$producto6='Atún';
$producto7='Frijoles';
$producto8='Carne';
$producto9='Arepas';
$producto10='huevos';

$precio1=1500;
$precio2=7000;
$precio3=8000;
$precio4=30000;
$precio5=2200;
$precio6=9000;
$precio7=4800;
$precio8=25000;
$precio9=10000;
$precio10=14000;

$productoEspecial='arroz';

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

//ejemplo1
echo("el total de su compra es: ".$total);

/*if($total>80000){
echo("    el dinero no le alcanza");
}else{
echo("    Gracias por su compra");
}*/

//ejemplo2
/*switch($productoEspecial){

    case 'manzana': 
        echo("Usted tiene el 10% de descuento.");
    break;

    case 'banano':
        echo("Usted tiene un 5% de descuento");
    break;

    default:
    echo("usted no tiene ningun decuento");
    break;
}*/

//ejemplo3
if($productoEspecial=="manzana"){
    echo(" .Tiene un 10% de descuento");
    
}else if ($productoEspecial=="banano"){
    echo(" .Tiene un 5% de descuento");

}else {
    echo(". No tiene ningun descuento");
}


?>