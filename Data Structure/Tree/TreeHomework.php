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

    function addNewData($newNumber)
    {
        $i = 0;
        if ($this->root === null) {
            $this->root = new Node($newNumber);
            array_push($this->arr, $this->root);
            return;
        }
        for ($j = 0; $j < count($this->arr); $j++) {
            if ($this->arr[$j]->getData() === null) {
                $this->arr[$j]->setData($newNumber);
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


    function showTheTree() {
        print_r($this->root);
    }

    function deleteLeaf($deleteNumber)
    {
        $i = 0;
        while ($this->arr[$i]->getData() !== $deleteNumber) {
            $i++;
        }
            $this->arr[$i]->setData(null);
    }
}

$bt = new BT();

$bt->addNewData(10);
$bt->addNewData(11);
$bt->addNewData(9);
$bt->addNewData(7);
$bt->addNewData(12);
$bt->addNewData(15);
$bt->addNewData(8);

$bt->deleteLeaf(12);

$bt->addNewData(12);

$bt->showTheTree();

?>
