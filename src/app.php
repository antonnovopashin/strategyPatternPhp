<?php

require "Context.php";
require "MakingMoneyStrategy.php";
require "EntrepreneurStrategy.php";
require "ChangingTheWorldStrategy.php";
require "OnPayrollStrategy.php";
require "Person.php";

$context = new \Context\Context();

$context::execute();