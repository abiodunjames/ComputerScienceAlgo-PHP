<?php

class ListNode
{
    public $data = NULL;
    public $next = NULL;

    public function __construct($data = NULL)
    {
        $this->data = $data;
    }


}


class LinkedList
{
    private $_firstNode = NULL;
    private $_totalNode = 0;

    public function insert($data = NULL)
    {
        $newNode = new ListNode($data);

        if ($this->_firstNode === NULL) {
            $this->_firstNode =& $newNode;

        } else {

            $currentNode = $this->_firstNode;

            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;

        }
        $this->_totalNode++;
        return TRUE;

    }

    public function insertBefore($data = NULL, $query = NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode) {
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    $this->_totalNode++;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }

        }
    }


    public function deleteFirst()
    {
        if ($this->_firstNode !== NULL) {
            if ($this->_firstNode->next !== NULL) {
                $this->_firstNode = $this->_firstNode->next;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNode--;
            return TRUE;
        }
        return FALSE;
    }

    public function insertAtFirst($data = NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode =& $newNode;
        } else {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->_totalNode++;
        return TRUE;
    }


    public function search($data = NULL)
    {
        if ($this->_totalNode) {
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return FALSE;
    }

    public function insertAfter($data = NULL, $query = NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode) {
            $nextNode = NULL;
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data === $query) {
                    if ($nextNode !== NULL) {
                        $newNode->next = $nextNode;
                    }
                    $currentNode->next = $newNode;
                    $this->_totalNode++;
                    break;
                }
                $currentNode = $currentNode->next;
                $nextNode = $currentNode->next;
            }
        }
    }


    public function deleteLast()
    {
        if ($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if ($currentNode->next === NULL) {
                $this->_firstNode = NULL;
            } else {
                $previousNode = NULL;
                while ($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $previousNode->next = NULL;
                $this->_totalNode--;
                return TRUE;
            }
        }
        return FALSE;
    }

    public function reverse()
    {
        if ($this->_firstNode !== NULL) {
            if ($this->_firstNode->next !== NULL) {
                $reversedList = NULL;
                $next = NULL;
                $currentNode = $this->_firstNode;
                while ($currentNode !== NULL) {
                    $next = $currentNode->next;
                    $currentNode->next = $reversedList;
                    $reversedList = $currentNode;
                    $currentNode = $next;
                }
                $this->_firstNode = $reversedList;
            }
        }
    }


    public function display()
    {
        echo "Total book titles: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }
}

$BookTitles = new LinkedList();
$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();
