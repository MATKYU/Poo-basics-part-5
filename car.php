<?php

class Car extends Vehicle
{

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start(): string
    {
        if ($this->getHasParkBrake() === true) {
            throw new Exception('Le frein à main est actif !');
        }
        $this->currentSpeed = 0;
        $this->energyLevel -= 5;
        return 'Starting the engine.';
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->setEnergy($energy);
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    // Do not modify the rest of the file

    // Fonction Dump
    public function dump()
    {
        var_dump($this);
    }
}
