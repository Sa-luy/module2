<?php

class Binary
{
    public array $stack;
    // public int $limit=16;
    function __construct()
    {
        $this->stack=[];
        $this->quotient=null;
        // $this->balance=null;
    }
    function getBinary(){

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

    function binaryConversion($item)
    {
      while ($item>= 1) {
          # code...
      
               $this->quotient=floor($item/2);
               // if($item==1){
                   //   $this->balance=1;
                   //  }
                   $balance= $item%2;
                   $this->quotient=$item;
                   $this->push($balance);
        }  
        

    }
}
$obj= new Binary;
$obj->binaryConversion(6);
echo $obj->quotient;
echo '<pre>';
print_r($obj->getBinary());
