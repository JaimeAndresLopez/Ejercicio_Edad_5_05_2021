<?php
    $edad1 = $_REQUEST['edad'];
    if($edad1 > 0 && $edad1 <= 1) {
        echo "Segun su edad ud es un recien nacido.";
    }
    elseif($edad1 > 1 && $edad1 <=12) {
        echo "Segun su edad ud es un recien niño(a).";
    }
    elseif($edad1 >= 13 && $edad1 <18) {
        echo "Segun su edad ud es adolecente.";
    }
    elseif($edad1 >= 18) {
        if($edad1 > 20 && $edad1 <= 35) {
            echo "Segun su edad ud es un adulto(a)";
        }
        elseif($edad1 >= 18 && $edad1 <=20) {
            echo "Esta en sus mejores años :)";
        }
        elseif($edad1 >35 && $edad1 <=64) {
            echo "Segun su edad ud es un señor(a)";
        }
        else{
            echo "Segun su edad ud es un anciano(a)";
        }
    }
    else{
        echo "Ud no ha nacido aun o vivio en el pasado";
    }

    echo "<hr><a href='index.html'>Regresar</a>"

?>