<?php
namespace Calculator;

use Calculator\NodeInterface;

class IfNode implements NodeInterface {
    public $if;
    public $then;
    public $else;
    
    function __construct($if, $then, $else) {
        $this->if = $if;
        $this->then = $then;
        $this->else = $else;
    }
    
    function calculate() {
        return ($this->if->calculate()) ? $this->then->calculate() : $this->else->calculate();
    }
}