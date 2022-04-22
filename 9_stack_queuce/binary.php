<?php

class Binary
{
    public array $stack;
    // public int $limit=16;
    function __construct()
    {
        $this->stack = [];
        // $this->quotient = null;
        // $this->balance = "";
    }
    function getBinary()
    {

        return $this->stack;
    }
    function push($item)
    {
        // if ($this->isfull()) {
        // echo 'Stack is full';
        // } else {
        array_unshift($this->stack, $item);
        // }
    }
    function top()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        } else {
            return array_pop($this->stack);
        }
    }
    function isEmpty()
    {
        if (empty($this->stack)) {
            return "Stack is empty";
        } else {
            return  "Stack not is empty";
        }
    }


    function binaryConversion($number)
    {
        $balanceStr = "";
        while ($number >= 1) {
            $bin = $number % 2;
            $number = floor($number / 2);
            $balanceStr .= $bin;
        }
        $balanceStr = strrev($balanceStr);
        return $balanceStr;
    }
}
$obj = new Binary;
echo $obj->binaryConversion(4);
// echo $obj->quotient;
// echo '<pre>';
// print_r($obj->getBinary());