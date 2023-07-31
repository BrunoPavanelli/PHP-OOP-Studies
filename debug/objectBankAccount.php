<?php

require __DIR__ . "/../vendor/autoload.php";
use App\BankAccount;
// to actualize namespaces declarations -> composer dump-autoload

$bankAccount = new BankAccount(
    "Nubank",
    "Bruno",
    "0001",
    "81818181",
    0
);

echo $bankAccount->getBalance();
echo PHP_EOL;

echo $bankAccount->deposit(10);
echo PHP_EOL;

echo $bankAccount->getBalance();
echo PHP_EOL;

echo $bankAccount->withdraw(5);
echo PHP_EOL;

echo $bankAccount->getBalance();
echo PHP_EOL;