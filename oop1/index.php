<?php

class Car {
    public string $carName;
    public string $speed;
    public string $type;
    protected string $color;

    function __construct(string $carName, string $speed, string $type, string $color) {
        $this->carName = $carName;
        $this->speed = $speed;
        $this->type = $type;
        $this->color = $color;
    }

    function __destruct() {
        echo "I am running last <br>";
    }

    function goingForward() {
        echo "The $this->carName is going $this->speed <br>";
    }

    function goingBackward() {
        echo "The $this->carName is going Backward <br>";
    }

    function getCarType() {
        echo "The $this->carName is $this->type <br>";
    }

    function getCarColor() {
        echo "The $this->carName is $this->color <br>";
    }
}

class SuperCar extends Car {
    function getColor() {
        echo $this->color;
    }
}

$lamborghini = new SuperCar('Ferrari x33', '500km/h', 'electric', 'green');
$lamborghini->goingForward();
$lamborghini->goingBackward();
$lamborghini->getCarColor();

echo $lamborghini->getColor();

$tesla = new Car('Tesla x10', '200km/h', 'electric', 'red');
echo $tesla->carName;

$tesla->goingForward();
$tesla->goingBackward();
$tesla->getCarType();

$toyota = new Car('Special Toyota', '300km/h', 'hybrid', 'blue');
$toyota->goingForward();
$toyota->goingBackward();

?>
