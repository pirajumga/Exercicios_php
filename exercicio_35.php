<?php

$array = [5,2,10];

function ordenarArray($array) {
    if ($array[0] < $array[1] && $array[0] < $array[2] && $array[1] < $array[2]) {
        var_dump($array[0], $array[1], $array[2]);
    } else if ($array[0] < $array[1] && $array[0] < $array[2] && $array[2] < $array[1]) {
        var_dump($array[0], $array[2], $array[1]);
    } else if ($array[1] < $array[0] && $array[1] < $array[2] && $array[0] < $array[2]) {
        var_dump($array[1], $array[0], $array[2]);
    } else if ($array[1] < $array[0] && $array[1] < $array[2] && $array[2] < $array[0]) {
        var_dump($array[1], $array[2], $array[0]);
    } else if ($array[2] < $array[0] && $array[2] < $array[1] && $array[0] < $array[1]) {
        var_dump($array[2], $array[0], $array[1]);
    } else {
        var_dump($array[2], $array[1], $array[2]);
    }
}

echo ordenarArray($array);
