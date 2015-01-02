<?php
namespace Calculator;

use Calculator\NodeInterface;

class ValueNode implements NodeInterface {
    public $value;
    
    function __construct($value) {
        $this->value = $value;
    }
    
    function calculate() {
        return $this->value;
    }
}
