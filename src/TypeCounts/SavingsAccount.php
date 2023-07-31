<?php

// declare(strict_types=1);

namespace App\TypeCounts;

use App\BankAccount;

// Inheritance

class SavingsAccount extends BankAccount
{
    const INCOME = 0.03;
    const COUNT_TYPE = "Savings Count";

    public function __construct(
        string $bank,
        string $titularName,
        string $agencyNumber,
        string $countNumber,
        float $balance
    ) {
        parent::__construct(
            $bank,
            $titularName,
            $agencyNumber,
            $countNumber,
            $balance
        );
    }

    public function getBalance(): string
    {
        return "Actual balance is: $" . number_format($this->balance + ($this->balance * self::INCOME), 2, ",", "");
    }
}