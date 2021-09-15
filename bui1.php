<?php

interface FlyBehavior {
    public function fly();
}
class FlyWithWings implements FlyBehavior {
    public function fly() {
        return 'Лечу';
    }
}
class FlyNoWay implements FlyBehavior {
    public function fly() {
        return 'Не лечу';
    }
}

class Duck {
    public $flyBehavior;

    public function performFly() {
        return $this->$flyBehavior->fly();
    }
}
class MallardDuck extends Duck {
    function__construct() {
        $this->flyBehavior = new FlyWithWings();
    }
}
class RubberDuck extends Duck {
    function__construct() {
        $this->$flyBehavior = new FlyNoWay();
    }
}

function polet(Duck $duck) {
    return $duck->performFly();
}

?>