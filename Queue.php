<?php
$quued = new Queue();
$quued->enqueue(1);
$quued->enqueue(2);
$quued->enqueue(3);
echo $quued->dequeue().'<br/>';
echo $quued->dequeue().'<br/>';
var_dump($quued->isEmpty());
echo '<br/>';
$quued->enqueue(4);
$quued->enqueue(5);
echo $quued->dequeue().'<br/>';
echo $quued->dequeue().'<br/>';
echo $quued->dequeue().'<br/>';
var_dump($quued->isEmpty());




class Node
{
    public $value = null;
    public $next = null;
}

class Queue
{
    public $front;
    public $back;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()){
            return null;
        }
        $removeValue = $this->front->value;
        $this->font=$this->front->next;
        return $removeValue;
    }
}