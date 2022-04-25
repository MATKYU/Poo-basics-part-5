<?php

// Bicycle Part 

require_once 'LightableInterface.php';
require_once 'vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->currentSpeed < 10) {
            return false;
        }
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
