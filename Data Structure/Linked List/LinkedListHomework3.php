<?php

require "LinkedListHomework1.php";

class LinkedList { 
    /** @var Node  head node */
    private $head;

    /**
    *@param int $data
    */
    public function insert($data)
    {
        $newNode = new Node($data); // create a Node
        if ($this->head === null) {
            // if the head is null, that mean linked list is empty, so the first node is head
            $this->head = $newNode;
        } else {
            // if linked list is not null, new node will be add to end of list
            // find the last node
            $last = $this->head; 
            while ($last->getNext() !== null) {
                $last = $last->getNext();
            }
            // insert new node to at last node
            $last->setNext($newNode);
        }
    }

    public function merge($list1,$list2) {
        if ($list1->head === null) {
            return $list2;
        } elseif ($list2->head === null) {
            return $list1;
        } elseif ($list1->head->getData() < $list2->head->getData()) {
            return $this->mergeUtil($list1,$list2);
        } else {
            return $this->mergeUtil($list2,$list1);
        }
    }

    public function mergeUtil($list1,$list2) {
        if($list1->head->getNext() === null) {
            $list1->head->setNext($list2);
            return $list1;
        }

        $curr1 = $list1->head;
        $next1 = $list1->head->getNext();
        $curr2 = $list2->head;
        $next2 = $list2->head->getNext();

        while ($next1 != null && $curr2 !== null) {
            if (($curr2->getData()) >= ($curr1->getData()) && ($curr2->getData()) <= ($next1->getData())) {
                $next2 = $curr2->getNext();
                $curr1->setNext($curr2);
                $curr2->setNext($next1);

                $curr1 = $curr2;
                $curr2 = $next2;
            } else {
                if ($next1->getNext() !== null) {
                    $next1 = $next1->getNext();
                    $curr1 = $curr1->getNext();
                } else {
                    $next1->setNext($curr2);
                    return $list1;
                }
            }
        }
        return $list1;
}
    /**
    * traversal linked list
    */
    public function visit()
    {
        $currNode = $this->head; // start from head node

        echo "Linked List: ";

        while ($currNode !== null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getNext();
        }
    }
}

$list1 = new LinkedList(); 
$list1->insert(1); 
$list1->insert(3); // (1) -> (3)
$list1->insert(10); // (1) -> (3) -> (10)

$list2 = new LinkedList(); // 
$list2->insert(2); //
$list2->insert(4); // (2) -> (4)
$list2->insert(5); // (2) -> (4) -> (5)

$list3 = $list1->merge($list1, $list2);

print_r($list3);

?>
