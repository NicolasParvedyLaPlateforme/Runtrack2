<?php

function isnombrepremier($a)
{
    if ($a == 0 || $a == 1) {
        return false;
    }
    for ($index = 2; $index < $a; $index++) {
        // echo $a % $index . "<br>";
        if ($a % $index == 0) {
            //C'est un nombre non premier
            return true;
        }

    }
    return false;
}

for ($i = 2; $i <= 1000; $i++) {
    if (isnombrepremier($i)) {
        // echo $i . 'Nombre non premier<br>';
    }else {
        echo "$i <br>";
    }
}