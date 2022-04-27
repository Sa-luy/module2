<?php

use Stack as GlobalStack;

class Olympia
{
    public string $nameCountry;
    public int $totalGoldMedals;
    function __construct($nameCountry,$totalGoldMedals)
    {
        $this->nameCountry=$nameCountry;
        $this->totalGoldMedals=$totalGoldMedals;
    }
}
class Stack extends SplStack{}
$obj=new Stack();
$obj->push(new Olympia('Viet Nam',236));
$obj->push(new Olympia('USA',230));
$obj->push(new Olympia('Taay Ban Nha',195));
$obj->push(new Olympia('Bồ Đào Nha ',200));
$obj->push(new Olympia('England',23));
$obj->push(new Olympia('Đức',96));
$obj->push(new Olympia('ChiNa',86));
$obj->push(new Olympia('Japan',216));
$obj->push(new Olympia('Korea',76));
$obj->push(new Olympia('Italia',180));
$obj->push(new Olympia('Australia',136));

echo '<pre>';
$obj1-$obj->copy();
var_dump($obj1);

function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}
function SortOlympia($array)
{
    for ($i = 0; $i < count($array); $i++) {
        
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] < $array[$j]) {
                swap($array[$i], $array[$j]);
            }
        }
    }
    return $array;
    // print_r($obj ) ;
}