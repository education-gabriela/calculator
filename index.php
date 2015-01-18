<?php
require_once 'vendor/autoload.php';

use Calculator\BinaryNode;
use Calculator\ValueNode;
use Calculator\IfNode;

echo "Examples in the README" . PHP_EOL;

$node = new BinaryNode(
    '+',
    new ValueNode(1),
    new BinaryNode(
        '*',
        new ValueNode(5),
        new ValueNode(4)
    )
);
var_dump($node->calculate());

$node = new BinaryNode(
    '<',
    new ValueNode(1),
    new ValueNode(2)
);
var_dump($node->calculate());

$node = new IfNode(
// if
    new BinaryNode(
        '<',
        new ValueNode(1),
        new ValueNode(2)
    ),
    // then
    new BinaryNode(
        '+',
        new ValueNode(7),
        new BinaryNode(
            '*',
            new ValueNode(2),
            new ValueNode(4)
        )
    ),
    // else
    new ValueNode('invalid!!!')
);
var_dump($node->calculate());
