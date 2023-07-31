<?php

namespace App;

use App\Contracts\DataBankAccountInterface;
use App\Contracts\OperationsBankAccountInterface;
// Namespaces
/*
    Segregate packages and identify classes mapped by the autoload mecanism
*/

// Encapsulation
// Atributes visibility
/*
    The concept of encaptsulation, is to private/protect the visibility of the atributes and some methods of our class, in order to protect them, where, this informations
    becomes to be acessable only in the scope of the class. To show or manipulate this infos, we use public methods. That way we can manage the displaing/manupliation for
    the infos of our class accordingly to our business rules.

    Seters and Geters:
    Seters -> public methods to change private atributes
    Geters -> public methods to show private atributes
*/

abstract class BankAccount implements DataBankAccountInterface, OperationsBankAccountInterface
{
    // Atributes
    protected string $bank;
    protected string $titularName;
    protected string $agencyNumber;
    protected string $countNumber;
    protected float $balance;

    //Constructor Method
    public function __construct(
        string $bank,
        string $titularName,
        string $agencyNumber,
        string $countNumber,
        float $balance,
    ) {
        $this->bank = $bank;
        $this->titularName = $titularName;
        $this->agencyNumber = $agencyNumber;
        $this->countNumber = $countNumber;
        $this->balance = $balance;
    }

    // Geters Methods
    public function getCountData(): array 
    {
        return [
            "bank" => $this->bank,
            "titularName" => $this->titularName,
            "agencyNumber" => $this->agencyNumber,
            "countNumber" => $this->countNumber,
            "balance" => $this->balance,
        ];
    }

    public function getBank(): string
    {
        return $this->bank;
    }
    
    public function getTitularName(): string
    {
        return $this->titularName;
    } 
    
    public function getAgencyNumber(): string
    {
        return $this->agencyNumber;
    } 
    
    public function getAccountNumber(): string
    {
        return $this->countNumber;
    } 
    
    public abstract function getBalance(): string;
    
    //Comportaments Methods
    public function deposit(float $value): string
    {
        $this->balance += $value;
        return "$" . number_format($value, 2, ",", "") . " deposit successufylly made";
    }

    public function withdraw(float $value): string
    {
        $this->balance -= $value;
        return "$" . number_format($value, 2, ",", "") . " withdraw successufylly made";
    }
}


