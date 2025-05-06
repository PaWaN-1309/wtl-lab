<?php
class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Car: $this->make $this->model ($this->year)<br>";
    }
}

// Create objects
$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2019);

// Call methods
$car1->displayDetails();
$car2->displayDetails();
?>