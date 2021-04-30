<?php

class Node {
    /** @var int */
    private $data;
    /** @var Node */ 
    private $next; 

    private $prev;
    /**
    * Constructor Node class
    */
    public function __construct($data = 0, $next = null, $prev = null)  // default value of $data is 0, $next is null
    {
        $this->data = $data; // initial $data
        $this->next = $next;  // initial $next
        $this->prev = $prev;
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
    * get next
    * @return Node
    */
    public function getNext()
    {
        return $this->next;
    }

    /**
    * set next
    * @param Node $next
    */
    public function setNext($next)
    {
        $this->next = $next;
    }
    
    public function getPrev()
    {
        return $this->prev;
    }

    public function setPrev($prev)
    {
        $this->prev = $prev;
    }
}

class LinkedList { 
    /** @var Node  head node */
    private $head;

    /**
    *@param int $data
    */
    public function insert($data)
    {
        $newNode = new Node($data); // create a Node
        if ($this->head == null) {
            // if the head is null, that mean linked list is empty, so the first node is head
            $this->head = $newNode;
        } else {
            // if linked list is not null, new node will be add to end of list
            // find the last node
            $last = $this->head; 
            while ($last->getNext() != null) { 
                $last = $last->getNext();
            }
            // insert new node to at last node
            $last->setNext($newNode);
            $newNode->setPrev($last);
        }
    }

    public function deleteAll($data)
    {
        if ($this->head == null) { // linked list is empty
            echo "List is empty.";
        }


        $current = $this->head;

        while ($current->getNext() != null)
        {
            if ($current->getNext()->getData() == $data)
            {
                $current->setNext($current->getNext()->getNext());
            }
            else
            {
                $current = $current->getNext();
            }
        }
    }
    /**
    * traversal linked list
    */
    public function visit()
    {
        $currNode = $this->head; // start from head node

        echo "Linked List: ";

        while ($currNode != null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getNext();
        }
    }

    public function reverse()
    {
        $currNode = $this->head; // start from head node

        echo "Linked List: ";

        while ($currNode->getNext() != null) {
            $currNode = $currNode->getNext();
        }

        
        while ($currNode != null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getPrev();
        }
    }
}

$list = new LinkedList(); // init linked list: $head = null
$list->insert(1);
$list->insert(2);
$list->insert(3);
$list->insert(4);
$list->insert(5);

$list->reverse();

?>
