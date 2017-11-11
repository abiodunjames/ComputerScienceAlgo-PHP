<?php

class TreeNode
{
    public $data = NULL;
    public $children = [];

    public function __construct($data = NULL)
    {
        $this->data = $data;
    }

    public function addChildren(TreeNode $node)
    {
        $this->children[] = $node;
    }
}

class Tree
{
    public $root = NULL;

    public function __construct(TreeNode $node)
    {
        $this->root = $node;
    }

    public function transverse(TreeNode $node, $level = 0)
    {
        if ($node) {
            echo str_repeat('-', $level) . $node->data . "\n";
            foreach ($node->children as $children) {
                $this->transverse($children, $level+1);
            }
        }
    }
}

$ceo =new TreeNode('CEO');
$tree = new Tree($ceo);
$cto = new TreeNode("CTO");
$cfo = new TreeNode("CFO");
$cmo = new TreeNode("CMO");
$coo = new TreeNode("COO");

$ceo->addChildren($cto);
$ceo->addChildren($cfo);
$ceo->addChildren($cmo);
$ceo->addChildren($coo);
$seniorArchitect =new TreeNode('Senior Architect');
$softwareEngineer =new TreeNode('Software Engineer');

$userInterfaceDesigner = new TreeNode("User Interface Designer");
$qualityAssuranceEngineer = new TreeNode("Quality Assurance Engineer");
$cto->addChildren($seniorArchitect);
$cto->addChildren($userInterfaceDesigner);
$seniorArchitect->addChildren($softwareEngineer);
$cto->addChildren($qualityAssuranceEngineer);
$tree->transverse($ceo);

