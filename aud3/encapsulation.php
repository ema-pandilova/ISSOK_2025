<?php
class BankAccount {
    private $balance;

    public function __construct($balance = 0) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            return "Insufficient funds!";
        }
    }

    public function getBalance() {
        return "Current balance: $" . $this->balance;
    }
}

$account = new BankAccount(1000);
echo $account->getBalance(); // Output: Current balance: $1000
$account->withdraw(200); // Withdraws $200
echo $account->getBalance(); // Output: Current balance: $800