<?php

class Vehicle {

    /**
     * passengersOnVehicle
     *
     * @var string
     */
    protected $passengersOnVehicle = 5;

    /**
     * Calculate vehicles.
     * 
     * @param int $countOfPassengers
     *
     * @return int
     */
    function calculateVehicles(int $countOfPassengers)
    {
        return ceil($countOfPassengers / $this->passengersOnVehicle);
    }

}

$vehicle = new Vehicle;

echo $vehicle->calculateVehicles(7);