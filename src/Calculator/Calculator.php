<?php

namespace Calculator;

class Calculator {

    public static function calculate(Node $node) {

        if(is_null($node->node_left) || is_null($node->node_right)) {
                return $node;
        }

        if(!is_numeric($node->node_left->value)) {
            $node->node_left = Calculator::calculate($node->node_left);
        }

        if(!is_numeric($node->node_right->value)) {
            $node->node_right = Calculator::calculate($node->node_right);
        }

        return $node->calculate();
    }
}