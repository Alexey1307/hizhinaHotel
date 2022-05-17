<?php

$arr = [1, 2, 3, 499,];
$arr_2 = [0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'];
echo '<pre>';
 print_r($arr);
echo '<pre>';


echo array_key_last($arr); //выводим ИНДЕКС последнего элемента массива
echo '<pre>';
echo $x = $arr[array_key_last($arr)];
echo '<pre>';

if (in_array('0', $arr_2)) {
    echo 'done';
}

else {
    echo 'nope';
}




?>