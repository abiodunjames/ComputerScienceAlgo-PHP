<?php

class BinaryNode
{
    public $left = NULL;
    public $right = NULL;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function addChildren(BinaryNode $right, BinaryNode $left)
    {
        $this->left = $left;
        $this->right = $right;
    }

}

class BinaryTree
{
    public $root;
    public  function __construct(BinaryNode $node)
    {
        $this->root =$node;
    }
    public  function transverse(BinaryNode $node, $level=0){
        if($node){
            echo str_repeat('-',$level).$node->data;
            if($node->right){
                $this->transverse($node->left,$level+1);
            }
            if($node->left){
                $this->transverse($node->left,$level+1);
            }
        }
    }

}

class TreeArray
{

    public $nodes;


    public function __construct($nodes)
    {
        $this->nodes = $nodes;
    }


    public function transverse($num = 0, $level = 0)
    {
        if (!isset($this->nodes[$num])) {
            return null;
        }
        echo str_repeat('-', $level) . $this->nodes[$num] ."\n";
        $left = 2 * $num + 1;
        $right = 2 * ($num + 1);
        $this->transverse($left, $left + 1);
        $this->transverse($right, $left + 1);

    }
}
$nodes = [];
$nodes[] = "Final";
$nodes[] = "Semi Final 1";
$nodes[] = "Semi Final 2";
$nodes[] = "Quarter Final 1";
$nodes[] = "Quarter Final 2";
$nodes[] = "Quarter Final 3";
$nodes[] = "Quarter Final 4";
$n =new TreeArray($nodes);
 $n->transverse(2);
