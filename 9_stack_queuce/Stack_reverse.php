<?php
class Stack
{
    public array $stack;
    public int $limit = 20;
    function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = 11;
    }
    function push($item)
    {
        // if ($this->isfull()) {
        // echo 'Stack is full';
        // } else {
        array_unshift($this->stack, $item);
        // }
    }
    function pop()
    {
        array_shift($this->stack);
    }
    function top()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        } else {
            current($this->stack);
        }
    }
    function isEmpty()
    {
        if (empty($this->stack)) {
            return "Stack is empty";
        } else {
            return "Stack not is empty";
        }
    }
}
$obj = new Stack();
for ($i = 0; $i < $obj->limit; $i++) {
    $obj->push($i);
}
echo '<pre>';
print_r($obj);