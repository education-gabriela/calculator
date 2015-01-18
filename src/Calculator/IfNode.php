<?php
namespace Calculator;

/**
 * Class IfNode
 * It verifies if a logical operation is true or false
 *
 * @package Calculator
 * @author gabidavila
 */
class IfNode implements NodeInterface
{
    public $if;
    public $then;
    public $else;

    public function __construct($if, NodeInterface $then, NodeInterface $else)
    {
        $this->if = $if;
        $this->then = $then;
        $this->else = $else;
    }

    public function calculate()
    {
        return ($this->if->calculate()) ? $this->then->calculate() : $this->else->calculate();
    }
}
