<?php

class Set {
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    public function add($ele)
    {
        if (!$this->isExist($ele)) {
            $this->elements[] = $ele;
        }
    }

    public function get()
    {
        return $this->elements;
    }

    public function isExist($ele)
    {
        return in_array($ele, $this->elements);
    }
}

$input = array(1, 2, 3, 4, 5, 2, -1, 5, 2, 7, 11, 11, -5);
$mySet = new Set();
foreach ($input as $element) {
    $mySet->add($element);
}

print_r($mySet->get());

?>
