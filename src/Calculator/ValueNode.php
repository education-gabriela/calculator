<?php
namespace Calculator;

/**
 * Class ValueNode
 *
 * This is a simple node with the number itself
 *
 * @package Calculator
 * @author gabidavila
 */
class ValueNode implements NodeInterface
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function calculate()
    {
        return $this->value;
    }
}
