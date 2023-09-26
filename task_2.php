<?php

$numbers = range(1, 10);
function removeEvenNumbers($numbers) {
    foreach ($numbers as $value) {
        if ($value % 2 != 0) {
            $oddNumbers[]= $value;
        }
    }
    print_r($oddNumbers);
}
removeEvenNumbers($numbers);