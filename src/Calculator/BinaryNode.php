<?php
namespace Calculator;

/**
 * Class BinaryNode
 *
 * It assumes that the left and right side are filled
 *
 * @package Calculator
 * @author gabidavila
 */
class BinaryNode implements NodeInterface
{
    public $this_left;
    public $this_right;
    public $operator;

    public function __construct($operator, NodeInterface $left, NodeInterface $right)
    {
        $this->operator = $operator;
        $this->this_left = $left;
        $this->this_right = $right;
    }

    public function calculate()
    {

        switch ($this->operator) {
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
