<?php
/**
 * Создайте переменную $studentCount и присвойте ей случайное значение от 1 до 1000000
 * Напишите алгоритм, который выведет в нужной форме (т.е. просклоняет слово "студент").
 */

$arrRarely = array(11, 12, 13, 14);

for($i = 0; $i < 1; $i++) {
    $studentCount = random_int(1, 1000000);
    $remains = $studentCount % 100;

    if (array_search($remains, $arrRarely)) {
        $suffix = 'ов';
    } else {
        switch ($remains % 10) {
            case 1: $suffix = ''; break;
            case 2:
            case 3:
            case 4: $suffix = 'а'; break;
            default: $suffix = 'ов'; break;            
        }
    }

    echo 'На учебе ' . $studentCount . ' студент' . $suffix . '.' . PHP_EOL;
}
