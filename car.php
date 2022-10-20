<?php

class car 
{
    private int $nbWheels;
    public int $currentSpeed;
    private string $color;
    public int $nbSeat;
    private string $fuel;
    public int $fuelLevel;

    public function __construct(string $color, int $nbSeat, string $fuel)
    {
        $this->color = $color;
        $this->nbseat = $nbSeat;
        $this->fuel = $fuel;
    }

    public function start(): string 
    {
        $this->currentSpeed = 15;
        return "Go!";
    }
    public function forward():string 
    {
        $this->currentspeed ++;
        return "Here we go";
      }
    
    public function brake(): string 
    {
        $sentence = "";
        while ($this->currentSpeed >30){
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
        }
        $sentence .= "i'm stopped !";
        return $sentence;
    }
    public function getColor(): string 
    {
        return $this->color;
    }
    public function setColor(string $color): void 
    {
        $this->color = $color;
    }
    public function getNbSeat(): int 
    {
        return $this->nbSeat;
    }
    public function setNbSeat(int $nbSeat): void 
    {
        $this->nbSeat = $nbSeat;
    }
    public function getFuel(): string 
    {
        return $this->fuel;
    }
    public function setFuel(string $fuel): void 
    {
        $this->fuel = $fuel;
    }
}