<?php

class Queue {
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    public function enqueue($ele)
    {
        array_unshift($this->elements, $ele); 
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            unset($this->elements[sizeof($this->elements) - 1]);
        }
    }

    public function front()
    {
            if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        }

        return null;
    }

    public function isEmpty()
    {
        return empty($this->elements);
    }
}

$priority = new Queue();
$dependent = new Queue();

$time = 0;

$priority->enqueue("2");
$priority->enqueue("1");
$priority->enqueue("3");

$dependent->enqueue("1");
$dependent->enqueue("2");
$dependent->enqueue("3");

while (!$priority->isEmpty()) {
    if ($priority->front() === $dependent->front()) {
        $priority->dequeue();
        $dependent->dequeue();
        $time += 2;
    } else {
        $priority->enqueue($priority->front());
        $priority->dequeue();
        $time += 1;
    }
}

echo "Totally taken time is " . $time;

?>
