<?php

require __DIR__ . "/../vendor/autoload.php";
use App\TypeCounts\CurrentAccount;
use App\Contracts\DataBankAccountInterface;
use App\Contracts\OperationsBankAccountInterface;
// to actualize namespaces declarations -> composer dump-autoload

function executeOperations(OperationsBankAccountInterface $bankAccount): void{
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
}

function showData(DataBankAccountInterface $bankAccount): void
{
    echo "Bank: " . $bankAccount->getBank();
    echo PHP_EOL;
    
    echo "Ag./Account: " . $bankAccount->getAgencyNumber() . "/" . $bankAccount->getAccountNumber();
    echo PHP_EOL;

    echo "Titular: " . $bankAccount->getTitularName();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;    
}

$bankAccount = new CurrentAccount(
    "Nubank",
    "Bruno",
    "0001",
    "81818181",
    50
);

showData($bankAccount);
executeOperations($bankAccount);