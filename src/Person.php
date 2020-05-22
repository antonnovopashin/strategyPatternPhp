<?php


namespace Context;


use Strategies\MakingMoneyStrategy;

class Person
{
    /* @var  bool  $greed */
    private $greed = true;

    /* @var bool $riskTolerance */
    private $riskTolerance = false;

    /* @var bool $experiencedInBusiness */
    private $experiencedInBusiness = false;

    /* @var int $money Amount of money person have */
    private $money;

    /* @var int $freeTime */
    private $freeTime = 16;

    /* @var int hourly rate $rate */
    private $rate;

    /* @var string  $name */
    private $name;

    public function __construct(string $name, bool $greed, bool $riskTolerance, bool $experiencedInBusiness, int $rate)
    {
        $this->name = $name;
        $this->greed = $greed;
        $this->riskTolerance = $riskTolerance;
        $this->experiencedInBusiness = $experiencedInBusiness;
        $this->rate = $rate;
    }

    public function implementMakingMoneyStrategy(MakingMoneyStrategy $strategy) {
//        var_dump($strategy);
        return $strategy->makeMoney($this->freeTime, $this->rate, $this->experiencedInBusiness);
    }


    /**
     * @return bool
     */
    public function isGreedy(): bool
    {
        return $this->greed;
    }

    /**
     * @return bool
     */
    public function isRiskTolerant(): bool
    {
        return $this->riskTolerance;
    }

    /**
     * @return bool
     */
    public function isExperiencedInBusiness(): bool
    {
        return $this->experiencedInBusiness;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}