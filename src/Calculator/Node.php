<?php

namespace Calculator;


    /**
     * TODO: Make stuff work?
     */

/*
    +
   / \
  1   *
     / \
    4   5
*/

class Node
{
    public $node_left;
    public $node_right;
    public $value;

    //for now I will assume that one of those values are null, value or operator
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function calculate()
    {

        if(!is_numeric($this->value))
        {
            switch($this->value) {
                case '*':
                    $result = $this->node_left->value * $this->node_right->value;
                    break;
                case '+':
                    $result = $this->node_left->value + $this->node_right->value;
                    break;
                case '/':
                    $result = $this->node_left->value / $this->node_right->value;
                    break;
                case '-':
                    $result = $this->node_left->value - $this->node_right->value;
                    break;
            }

            return new Node($result);
        }
    }
}