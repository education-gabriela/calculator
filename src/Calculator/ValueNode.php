<?php
namespace Calculator;

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
