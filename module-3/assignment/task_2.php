<?php

$numbers = range(1, 10);

function isEvenNumber ($number) {
    if ($number % 2 !== 0) {
        return true;
    }
}

$result = array_filter($numbers, 'isEvenNumber');

print_r($result);