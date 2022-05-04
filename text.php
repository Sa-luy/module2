<?php
function sort_ascending($arr, $element)
{
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        array_push($element, $arr[$i]);
    }
    $arr = $element;
    return $arr;
}
$element = [];
$arr = [1, 4, 2, 56, 3];
echo '<pre>';
print_r(sort_ascending($arr, $element));