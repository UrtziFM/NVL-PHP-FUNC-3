/* Practica en PHP */



<?php
    
    
function vocalesSIoNO(string $palabra){
    $suma_A = substr_count(strtoupper($palabra), strtoupper($vocal = 'a'));
    $suma_E = substr_count(strtoupper($palabra), strtoupper($vocal = 'e'));
    $suma_I = substr_count(strtoupper($palabra), strtoupper($vocal = 'i'));
    $suma_O = substr_count(strtoupper($palabra), strtoupper($vocal = 'o'));
    $suma_U = substr_count(strtoupper($palabra), strtoupper($vocal = 'u'));
    if ($suma_A && $suma_E && $suma_I && $suma_O && $suma_U > 0){
        echo "LA PALABRA CONTIENE LAS 5 VOCALES";
    } else{
        echo "LA PALABRA NO CONTIENE LAS 5 VOCALES";
    }
}

vocalesSIoNO("Aceituneros")
    
?>