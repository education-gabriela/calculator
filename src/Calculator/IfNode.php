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

    public function __construct(NodeInterface $if, NodeInterface $then, NodeInterface $else)
    {
        $this->if = $if;
        $this->then = $then;
        $this->else = $else;
    }

    public function calculate()
    {
        $value = $this->if->calculate();
        if (!is_bool($value)) {
            throw new \RuntimeException(sprintf('Expected a boolean from condition %s in IfNode, received %s', print_r($this->if, true), print_r($value, true)));
        }
        return $value ? $this->then->calculate() : $this->else->calculate();
    }
}
