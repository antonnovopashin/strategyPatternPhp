<?php


namespace Strategies;


class EntrepreneurStrategy implements MakingMoneyStrategy
{
    function makeMoney($time, $rate, $experience)
    {
        if (true === $experience) {
            return $time * $rate * rand(100, 999);
        } else {
            return $time * $rate * rand(10, 99) * (-1);
        }
    }
}