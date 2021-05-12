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

/**
* Binary Tree Class
*/
class BT {
    /** @var Node */ 
    private $root;
    private $arr;

    public function __construct($root = null, $arr = array())
    {
        $this->root = $root;
        $this->arr = $arr;
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

    public function addNewData($newNumber)
    {
        $i = 0;
        if ($this->root === null) {
            $this->root = new Node($newNumber);
            array_push($this->arr, $this->root);
            return;
        }
        for ($j = 0; $j < count($this->arr); $j++) {
            if ($this->arr[$j] === null) {
                $this->arr[$j] = new Node($newNumber);
                return;
            }
        }
        while ($i < count($this->arr)) {
            $current = $this->arr[$i];
            if ($current->getLeft() === null) {
                $current->setLeft(new Node($newNumber));
                array_push($this->arr, $current->getLeft());
                return;
            } elseif ($current->getRight() === null) {
                $current->setRight(new Node($newNumber));
                array_push($this->arr, $current->getRight());
                return;
            } else {
                $i++;
            }
        }
    }


    public function showTheTree() {
        print_r($this->root);
    }

    public function arrayPush($newNode) {
        array_push($this->arr, $newNode);
    }

}

$bt = new BT();

$parent2 = new Node(7, null, null);
$parent3 = new Node(15, null, null);
$parent4 = new Node(8, null, null);

$parent0 = new Node(11, $parent2, null);
$parent1 = new Node(9, $parent3, $parent4);

$root = new Node(10, $parent0, $parent1);

$bt = new BT($root);

$bt->arrayPush($root);
$bt->arrayPush($parent0);
$bt->arrayPush($parent1);
$bt->arrayPush($parent2);
$bt->arrayPush($parent0->getRight());
$bt->arrayPush($parent3);
$bt->arrayPush($parent4);

$bt->addNewData(12);

$bt->showTheTree();

?>
