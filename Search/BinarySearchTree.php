<?php

class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = NULL;
        $this->right = NULL;
    }

    public function max()
    {
        $node = $this;
        while ($node->right) {
            $node = $node->right;
        }
        return $node;
    }

    public function min()
    {
        $node = $this;
        while ($node->left) {
            $node = $node->left;
        }
        return $node;
    }

    public function successor()
    {
        $node = $this;
        if ($node->right) {
            return $node->right->min();
        }
        return NULL;
    }

    public function predecessor()
    {
        $node = $this;
        if ($node->left) {
            return $node->left->max();
        }
        return NULL;
    }
}

class BST
{
    public $root = NULL;

    public function __construct(int $data)
    {
        $this->root = new Node($data);
    }

    public function isEmpty()
    {
        return $this->root === NULL;
    }

    public function insert($data)
    {
        if ($this->isEmpty()) {
            $node = new Node($data);

            $this->root = $node;
            return $node;
        }
        $node = $this->root;
        while ($node) {
            if ($data > $node->data) {
                if ($node->right) {
                    $node = $node->right;
                } else {
                    $node->right = new Node($data);
                    $node = $node->right;
                    break;
                }
            } elseif ($data < $node->data) {
                if ($node->left) {
                    $node = $node->left;
                } else {
                    $node->left = new Node($data);
                    $node = $node->left;
                    break;
                }
            } else {
                break;
            }
        }
        return $node;

    }

    public function transverse(Node $node)
    {
        if ($node) {
            if ($node->left) {
                $this->transverse($node->left);
            }
            if ($node->right) {
                $this->transverse($node->right);
            }
            echo $node->data . "\n";

        }

    }

    public function search($data)
    {
        if ($this->isEmpty()) {
            return NULL;
        }
        $node = $this->root;
        $found=false;
        while ($node) {
            if ($data > $node->data) {
                $node = $node->right;
            } elseif ($data < $node->data) {
                $node = $node->left;
            } elseif($data==$node->data) {
                $found=true;
                break;
            } else{
                break;
            }
        }
        return $found;
    }
}

$tree = new BST(10);
$tree->insert(12);
$tree->insert(6);
$tree->insert(3);
$tree->insert(8);
$tree->insert(15);
$tree->insert(13);
$tree->insert(36);
//$tree->transverse($tree->root);
echo $tree->search(68)?'Found':'Notfound';
