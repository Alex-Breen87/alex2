<?php

interface FlyBehavior {
    public function fly();
}
class FlyWithwings implements FlyBehavior {
    public function fly() {
        echo 'ураааяяя';
    }
}
class FlyNoWay implements FlyBehavior {
    public function fly() {
        echo 'ниииииииит';
    }
}

class Duck {
    public $flyBehavior;
  
    public function perfomrFly() {
        $this->$flyBehavior->fly()
    }
}
class MallardDuck extends Duck {
    function __construct() {
        $this->$flyBehavior = new FlyWithWings();
    }
}

$duck1 = new MallardDuck();
$duck1->performFly();
?>