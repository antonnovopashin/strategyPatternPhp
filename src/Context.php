<?php


namespace Context;


use Strategies\ChangingTheWorldStrategy;
use Strategies\EntrepreneurStrategy;
use Strategies\OnPayrollStrategy;

class Context
{
     function execute()
    {
        $jeffBezos = new Person('Jeff', true, true, true, 10000);
        $dalaiLama = new Person('Lama', false, true, false, 50);
        $akakiyAkakievich = new Person('Akakiy', false, false, false, 2);
        $antonNovopashin = new Person('idiot', true, false, false, 10);
        $futureAntonNovopashin = new Person('Anton', true, true, false, 50);

        $society = [$jeffBezos, $dalaiLama, $akakiyAkakievich, $antonNovopashin, $futureAntonNovopashin];
        $profits = [];
        foreach ($society as $societyMember) {
            /* @var Person $societyMember */
            if (true === $societyMember->isGreedy() and true === $societyMember->isRiskTolerant()) { //here will be jeff bezos and future me
                $generatedMoney = $societyMember->implementMakingMoneyStrategy(new EntrepreneurStrategy());
                array_push($profits, [$societyMember->getName() => $generatedMoney, 'Strategy' => 'EntrepreneurStrategy']);
            } elseif (true === $societyMember->isGreedy() and false === $societyMember->isRiskTolerant()) { // for past me
                $generatedMoney= $societyMember->implementMakingMoneyStrategy(new OnPayrollStrategy());
                array_push($profits, [$societyMember->getName() => $generatedMoney, 'Strategy' => 'OnPayrollStrategy']);
            } elseif (false === $societyMember->isGreedy() and true === $societyMember->isRiskTolerant()) { //Dalai Lama
                $generatedMoney = $societyMember->implementMakingMoneyStrategy(new ChangingTheWorldStrategy());
                array_push($profits, [$societyMember->getName() => $generatedMoney, 'Strategy' => 'ChangingTheWorldStrategy']);
            } elseif (false === $societyMember->isGreedy() and false === $societyMember->isRiskTolerant()) { //for Akakiy akakievich
                $generatedMoney = $societyMember->implementMakingMoneyStrategy(new OnPayrollStrategy());
                array_push($profits, [$societyMember->getName() => $generatedMoney, 'Strategy' => 'OnPayrollStrategy']);
            }
        }
        var_dump($profits);

        return $profits;
    }
}