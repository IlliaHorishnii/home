<?php

interface Carcass
{
    public function carcass():string;
}

interface WheelsFormula
{
    public function wheelsFormula():string;
}

interface EnginesType
{
    public function enginesType():string;
}

interface Transmission
{
    public function transmission():string;
}

trait PowerCounter
{
    public function powerCounter($volume, $engineType):int
    {
        if($engineType === 'petrol')
        {
            return $power = $volume * 0.85 *(2500/120); //Мощность = объём двигателя * среднее эффективное давление * (частота вращения/120)

        }
        if($engineType === 'diesel')
        {
            return $power = $volume * 2.5 *(2500/120);
        }
    }
}

class NissanRogue implements Carcass, WheelsFormula, EnginesType, Transmission
{
    use PowerCounter;

    protected $carcass = 'SUV';

    protected $wheelsFormula = '2x2';

    protected $enginesType = 'petrol';

    protected $transmission = 'auto';

    protected $volume = '2.5';

    public function carcass():string
    {
        return $this->carcass;
    }

    public function wheelsFormula():string
    {
        return $this->wheelsFormula;
    }

    public function enginesType():string
    {
        return $this->enginesType;
    }

    public function transmission():string
    {
        return $this->transmission;
    }

    public function callPowerCounter():void
    {
        echo 'Мощность двигателя: ' . $this->powerCounter($this->volume, $this->enginesType) . ' кДж';
    }
}

$obj = new NissanRogue();
echo 'Тип кузова: ' . $obj->carcass() . '<br>';
echo 'Формула колес: ' . $obj->wheelsFormula() . '<br>';
echo 'Тип двигателя: ' . $obj->enginesType() . '<br>';
echo 'Тип коробки передач: ' . $obj->transmission() . '<br>';

$obj->callPowerCounter();