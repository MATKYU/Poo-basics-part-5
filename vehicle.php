<?php 

// Vehicle.php

abstract class Vehicle
{
 
    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 5;
        return "Do it ! Press the Mushroom !! ";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "your driving instructor tells you to brake !" . "<br>";
        }

        $sentence .= "I'm stopped ! , Look i not kill the Crocodile ! ";
        return $sentence;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
