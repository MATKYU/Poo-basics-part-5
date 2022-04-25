<?php

require_once 'HighWay.php';

final class PedestrianWay extends highWay
{
    public function addVehicle(Vehicle $addVehicle)
    {
        if (($addVehicle instanceof Skateboard) || ($addVehicle instanceof Bicycle)) {
            $this->currentVehicles[] = $addVehicle;
        }
    }
}
