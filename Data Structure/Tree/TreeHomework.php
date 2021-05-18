<?php

/**
* A node of Binary Tree (BT)
*/
class Node {
    /** @var int */
    private $data;

    /** @var Node left subtree */
    private $left;

    /** @var Node right subtree */
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    /**
    * get data
    * @return int
    */
    public function getData()
    {
        return $this->data;
    }

    /**
    * set data
    * @param int $data
    */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
    * get left
    * @return Node
    */
    public function getLeft()
    {
        return $this->left;
    }

    /**
    * set left
    * @param Node $left
    */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
    * get right
    * @return Node
    */
    public function getRight()
    {
        return $this->right;
    }

    /**
    * set right
    * @param Node $right
    */
    public function setRight($right)
    {
        $this->right = $right;
    }
}

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

/**
* Binary Tree Class
*/
class BT {
    /** @var Node */ 
    private $root;

    public function __construct($root = null)
    {
        $this->root = $root;
    }

    /**
    * get root
    * @return Node
    */
    public function getRoot()
    {
        return $this->root;
    }

    /**
    * set root
    * @param Node $root
    */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    public function addNewData($number) {
        $queue = new Queue();
        if ($this->root === null) {
            $this->root = new Node($number);
            return;
        }
        $queue->enqueue($this->root);
        while(!$queue->isEmpty()) {
            if ($queue->front()->getLeft() === null) {
                $queue->front()->setLeft(new Node($number));
                return;
            } else {
                $queue->enqueue($queue->front()->getLeft());
            }
            if ($queue->front()->getRight() === null) {
                $queue->front()->setRight(new Node($number));
                return;
            } else {
                $queue->enqueue($queue->front()->getRight());
            }
            $queue->dequeue();
        }
    }

}

$parent2 = new Node(7, null, null);
$parent3 = new Node(15, null, null);
$parent4 = new Node(8, null, null);

$parent0 = new Node(11, $parent2, null);
$parent1 = new Node(9, $parent3, $parent4);

$root = new Node(10, $parent0, $parent1);

$bt = new BT($root);

$bt->addNewData(12);

echo $bt->getroot()->getLeft()->getRight()->getData();

?>
