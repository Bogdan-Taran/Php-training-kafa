<?php
$array = [2, 3, 6, 1, 23, 2, 56, 7, 1, 15];
$number = 1;

function foundValue($array, $value) :bool {
    foreach ($array as $item) {
        if ($item === $value) {
            return true;
        }
    }
    return false;
}
$isFound = foundValue($array, $number);
echo $isFound;

function countValueInputs($array, $value):int {
    $count = 0;
    foreach ($array as $item) {
        if ($item === $value) {
            $count++;
        }
    }
    return $count;
}
$count = countValueInputs($array, $number);
echo '<br>Количество вхождений числа' . $number . 'в массиве равно ' . $count;


?>
