<?php
namespace Calculator;

use Calculator\NodeInterface;

class BinaryNode implements NodeInterface
{
    public $this_left;
    public $this_right;
    public $operator;

    //for now I will assume that one of those values are null, value or operator
    public function __construct($operator, $left, $right)
    {
        $this->operator = $operator;
        $this->this_left = $left;
        $this->this_right = $right;
    }
    
    public function calculate() {

        switch($this->operator) {
                case '*':
                    $result = $this->this_left->calculate() * $this->this_right->calculate();
                    break;
                case '+':
                    $result = $this->this_left->calculate() + $this->this_right->calculate();
                    break;
                case '/':
                    $result = $this->this_left->calculate() / $this->this_right->calculate();
                    break;
                case '-':
                    $result = $this->this_left->calculate() - $this->this_right->calculate();
                    break;
                case '>':
                    $result = $this->this_left->calculate() > $this->this_right->calculate();
                    break;
                case '<':
                    $result = $this->this_left->calculate() < $this->this_right->calculate();
                    break;
                case '=':
                    $result = $this->this_left->calculate() == $this->this_right->calculate();
                    break;
            }

            return $result;
    }
}
