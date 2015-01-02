<?php
require_once 'vendor/autoload.php';

use Calculator\Node;
use Calculator\Calculator;


$node = new Node('+');
$node->node_left = new Node(1);
$node->node_right = new Node('*');
$node->node_right->node_left = new Node(5);
$node->node_right->node_right = new Node(4);

$result = Calculator::calculate($node);
var_dump($result);
var_dump(Calculator::calculate(new Node(5)));