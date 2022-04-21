<?php
class Stack
{
    public $stack;
    public $n;
    public function __construct($n)
    {
        $this->stack = [];
        $this->n = $n;
    }
    function push($item)
    {
        if (count($this->stack) < $this->n) {
            array_unshift($this->stack, $item);
        } else {
            echo " stack is fulll";
        }
    }
    function size(){
        return count($this->stack);
    }
    function pop()
    {
        return array_shift($this->stack);
    }
    function toArray(){
        return $this->stack;
    }
    public function isFull()
    {
        return count($this->stack)==$this->n;
    }
}
$stack = new Stack(4);
$stack->push("hang 1 ");
$stack->push("hang 2");
$stack->push("hang 3");
$stack->push("hang 4");
echo '<pre>';
print_r($stack);
// $items=$stack->toArray();
// // $stack->pop();
// // $stack ->pop();
// for ($i=0; $i <$stack->size() ; $i++) {
//     $stack->pop();
// }
// foreach($items as $key => $item){
//   $stack->push($item);
// }
// print_r($stack);
$stackReverse = [];
//ptu lay ra bien mat
for ($i = 0; $i <= $stack->isFull(); $i++) {
   array_push($stackReverse, $stack->pop(), $stack->pop(), $stack->pop());
}
print_r($stackReverse);