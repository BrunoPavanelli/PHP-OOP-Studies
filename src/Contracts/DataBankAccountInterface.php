<?php

declare(strict_types=1);

namespace App\Contracts;

interface DataBankAccountInterface
{
    public function getBank(): string;
    public function getTitularName(): string;
    public function getAgencyNumber(): string;
    public function getAccountNumber(): string;    
}