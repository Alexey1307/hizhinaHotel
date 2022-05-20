<?php

$arr = [10, 2, 3, 499,];
$arr_2 = [0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'];
echo '<pre>';
 print_r($arr);
echo '<pre>';

//Находим последний элемент массваи и его индекс.
echo 'Индекс последнего элемента = ';
echo array_key_last($arr);
echo '<pre>';
echo 'Значение последнего элемента = ';
echo $arr[array_key_last($arr)];
echo '<pre>';

//Находим минимальный и максимальный элемент массива
$min = min($arr);
$max = max($arr);
echo 'Миниммальный элемент массива - ';
echo $min;
echo '<pre>';
echo 'Максимальный элемент массива - ';
echo $max;
echo '<pre>';
echo 'Длина массива - ';
echo count($arr);
echo '<pre>';

//Алгоритмы. Сортировка выбором.
$min = min($arr);
$arr_2 = [];
    foreach ($arr as $key => $value) {
        if ($value = $min) {
            $arr_2[] = $value;
            unset($arr[$key]);

            
        }
        print_r ($arr_2);
    }
    print_r($arr);

?>