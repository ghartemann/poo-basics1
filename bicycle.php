<?php

class Bicycle
{
    // Attributs
    private string $color;
    public int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    // Methodes
    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }

    public function forward(): string
    {
        $this->currentSpeed = 2;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Getters/setters
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
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

}