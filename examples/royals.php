<?php

require 'treeNode.php';

$liz  = new TreeNode('Elizabeth');
$chaz = new TreeNode('Charles', $liz);
$will = new TreeNode('William', $chaz);

var_dump($chaz->grandParentName());
