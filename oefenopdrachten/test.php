<?php

class Test {
    private $_tests;

    public function __construct() {
        $this->_tests = array();
    }

    public function append($item) {
        $this->_tests[] = $item;
    }

    public function getItems() {
        foreach ($this->_tests as $testItem) {
            echo $testItem;
            echo "<br>";
        }
    }

}


$testA = new Test();
$testA->append('Dit is index 0');
$testA->append('Dit is index 1');
$testA->getItems();
//
?>
