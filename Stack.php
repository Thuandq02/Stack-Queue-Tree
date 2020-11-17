<?php
$stacks = new Stack();
$stacks->push(1);
$stacks->push(2);
$stacks->push(3);
$stacks->push(4);
$stacks->push(5);
echo $stacks->pop().'<br/>';
echo $stacks->pop().'<br/>';
echo $stacks->pop().'<br/>';
$stacks->push(6);
$stacks->push(7);
var_dump($stacks->isEmpty());
echo '<br/>';
echo $stacks->pop().'<br/>';
echo $stacks->pop().'<br/>';
echo $stacks->pop().'<br/>';
echo $stacks->pop().'<br/>';
var_dump($stacks->isEmpty());


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
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

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

}