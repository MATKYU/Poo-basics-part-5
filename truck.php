<?php

class Truck extends Vehicle
{
    private int $capStock = 0;
    private int $capStockLimit;

    public function __construct(int $capStockLimit, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capStockLimit = $capStockLimit;
        $this->energy = $energy;
    }

    public function getCapStock(): int
    {
        return $this->capStock;
    }

    public function setCapStock(int $capStock): void
    {
        $this->capStock = $capStock;
    }

    public function getCapStockLimit(): int
    {
        return $this->capStockLimit;
    }

    public function setCapStockLimit(int $capStockLimit): void
    {
        $this->capStockLimit = $capStockLimit;
    }

    public function CapFull(): string
    {
        if ($this->capStock === $this->capStockLimit) {
            return 'Is Full';
        } else {
            if ($this->capStock < $this->capStockLimit) {
                return 'In filling';
            }
        }
    }
    // // move 
    // public function forward(): string
    // {
    //     $this->currentSpeed = 5;

    //     return "Press the Mushroom";
    // }

    // public function brake(): string
    // {
    //     $sentence = "";
    //     while ($this->currentSpeed > 0) {
    //         $this->currentSpeed--;
    //         $sentence .= "Stop to play Fast and Nulous!!" . "<br>";
    //     }
    //     $sentence .= "I'm stopped !";
    //     return $sentence;
    // }
}
