<?php

$fruta="Papa";

switch ($fruta){
    case 'Fresa':
        echo "Eres una fresa";
    break;
    case 'Pera':
        echo "Eres una pera";
    break;
    default;
    echo "No eres ni fresa ni pera";
}

echo "<br>";

#ejercicio de los dias

$día="10";

switch ($día){
    case "1":
        echo "Hoy es Lunes";
    break;
    case "2":
        echo "Hoy es Martes";
    break;
    case "3":
        echo "Hoy es Miércoles";
    break;
    case "4":
        echo "Hoy es Jueves";
    break;
    case "5":
        echo "Hoy es Viernes";
    break;
    case "6":
        echo "Hoy es Sabado";
    break;
    case "7":
        echo "Hoy es Domingo";
    break;
    default;
    echo "ERROR, ingrese otro numero de día valido";
}