<?php

require_once 'HighWay.php';

final class ResidentialWay extends highWay
{
    public function addVehicle(Vehicle $addVehicle)
    {
        $this->currentVehicles[] = $addVehicle;
    }
}