<?php

class ListNode
{
    /*Data to hold **/
    public $data;
    /**Pointer to the next element**/
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    public function readNode()
    {
        return $this->data;
    }

}

class LinkList
{

    private $firstNode = NULL;
    private $lastNode = NULL;
    private $total = 0;


    public function insertFirst($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $this->firstNode =& $link;
        $this->total++;
        if ($this->lastNode == NULL) {
            $this->lastNode =& $link;
            $this->lastNode->next = NULL;
        }

    }

    public function insertLast($data)
    {
        $link = new ListNode($data);
        if ($this->lastNode != NULL) {
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode =& $link;
            $this->total++;

        } else {
            $this->insertFirst($data);
        }
    }

    public function deleteFirst()
    {
        if ($this->firstNode != NULL) {
            $nodeToDelete = $this->firstNode;
            $newFirstNode = $nodeToDelete->next;
            $this->firstNode = $newFirstNode;
            $this->total--;
            return $nodeToDelete;
        }
    }

    public function deleteLast()
    {
        if ($this->firstNode != NULL) {
            if ($this->firstNode->next == NULL) {
                $this->firstNode = NULL;
                $this->total++;
            }

        } else {
            $previousNode = $this->firstNode;
            $currentNode = $this->firstNode->next;
            while ($currentNode->next != NULL) {
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
            }
            $previousNode->next = NULL;
            $this->count--;
        }

    }

    public function deleteBy($query)
    {
        if ($this->firstNode != NULL) {
            if ($this->firstNode->data == $query) {
                $this->firstNode = NULL;
                $this->total--;
                return;
            }
            $previous = $this->firstNode;
            $currentNode = $this->firstNode;
            while ($currentNode->data != $query) {
                if ($currentNode->next == NULL) {
                    return NULL;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
            if ($this->firstNode == $currentNode) {
                if ($this->count == 1) {
                    $this->lastNode = $this->firstNode;
                }
                $this->firstNode = $this->firstNode->next;
            } else {
                if($this->lastNode==$currentNode){
                    $this->lastNode=$previous;
                }
                $previous->next =$this->current->next;
            }
    $this->total--;

        }

    }
    public  function find($key){
        $current =$this->firstNode;
        while($current->data!=$key){
            if($current->next==NULL){
                return NULL;
            }
            $current =$current->next;
        }
        return $current;

    }
    public  function readNodes($nodePos){
        if($nodePos<=$this->total){
            $pos=1;
            $current =$this->firstNode;
            while($pos!=$this->total){

                if($current->next==NULL){
                    return null;
                } else{
                    $current =$current->next;
                }
                $pos++;
            }
            return $current->data;


        } else{
            return NULL;
        }
    }

    public  function readList(){
        $list =array();
        $current =$this->firstNode;
        while ($current!=null){
            array_push($list, $current);
            $current=$current->next;
        }
        return $list;
    }

    public  function reverseList(){
        
    }
}
