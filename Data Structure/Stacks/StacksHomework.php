<?php

class Stack {
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    public function push($ele)
    {
        $this->elements[] = $ele;
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_pop($this->elements);
        }
    }

    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        } else {
            return null;
        }
    }

    public function isEmpty()
    {
        return empty($this->elements);
    }

    public function size()
    {
        return sizeof($this->elements);
    }
}

function removeCoupleOfWords($words)
{
    $stack = new Stack();
    for ($i = 0; $i < count($words); $i++) {
        if ($stack->isEmpty()) {
            $stack->push($words[$i]);
        } else {
            if($stack->top() == $words[$i]) {
                $stack->pop();
            } else {
                $stack->push($words[$i]);
            }
        }
    }
    return $stack->size();
}

$words = ["ab", "aa", "aa", "bcd", "ab"];
echo removeCoupleOfWords($words);

?>
