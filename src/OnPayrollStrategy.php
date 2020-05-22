<?php


namespace Strategies;


class OnPayrollStrategy implements MakingMoneyStrategy
{
    function makeMoney($time, $rate, $experience)
    {
        return $time * $rate;
    }
}