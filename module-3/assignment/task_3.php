<?php

    //Task 3: Array Sorting  
    $grades = [85, 92, 78, 88, 95];

    function sortAndPrint ($arg) {
        rsort($arg);

        print_r($arg);
    }

    sortAndPrint($grades);