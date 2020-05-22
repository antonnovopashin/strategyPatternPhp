<?php


namespace Strategies;


interface MakingMoneyStrategy
{
    function makeMoney($time, $rate, $experience);
}