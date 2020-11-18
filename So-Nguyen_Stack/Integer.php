<?php
$integer = new Integer();
$integer->push(1);
$integer->push(2);
$integer->push(3);
$integer->push(4);
$integer->push(5);
echo $integer->pop();
echo $integer->pop();


class Integer
{
    public $stack;
    public $limit;

    public function __construct($limit=10)
    {
        $this->stack = array();
        $this->limit=$limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException("Stack is full");
        }
    }
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack id empty!');
        } else {
            return array_shift($this->stack);
        }
    }
    public function isEmpty(){
        return empty($this->stack);
    }
}