<?php

declare(strict_types=1);

namespace App\Contracts;

interface OperationsBankAccountInterface
{
    public function deposit(float $valor): string;
    public function withdraw(float $valor): string;
    public function getBalance(): string;
}