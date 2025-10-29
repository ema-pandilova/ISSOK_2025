<?php

enum AccountType: string
{
    case SAVINGS = 'Savings';
    case CHECKING = 'Checking';
    case BUSINESS = 'Business';
}

class BankAccount
{
    public $accountNumber;
    public AccountType $accountType;
    protected $balance;

    public function __construct($accountNumber, AccountType $accountType, $balance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->accountType = $accountType;
        $this->balance = $balance;
    }

    public function getAccountInfo()
    {
        return "Account Number: {$this->accountNumber}, Type: {$this->accountType->value}, Balance: {$this->balance}";
    }
}

$account1 = new BankAccount('123456', AccountType::SAVINGS, 5000);
$account2 = new BankAccount('987654', AccountType::CHECKING, 1000);

echo $account1->getAccountInfo(); // Output: Account Number: 123456, Type: Savings, Balance: 5000
echo $account2->getAccountInfo(); // Output: Account Number: 987654, Type: Checking, Balance: 1000