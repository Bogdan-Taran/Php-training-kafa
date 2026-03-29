<?php
$array_even_nums = [];
$start = 345;
while ($start <= 357){
    if($start % 2 == 0){
        $array_even_nums[] = $start;
    }
    $start++;
}
foreach ($array_even_nums as $num){
    echo $num . '<br>';
}

/*
while (true) {
echo 1;
}
приводит к бесконечному циклу
а вот директива max_execution_time в файле конфигурации php.ini
нужна для ограничения времени выполнения PHP-скриптов, т.е. чтобы предотвратить долгое выполнение скрипта
 */

?>
