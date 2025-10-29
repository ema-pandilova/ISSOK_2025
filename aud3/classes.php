<?php

class BankAccount {
    public $accountNumber;
    protected $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return "Deposited $$amount. New balance is $$this->balance.";
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Наследување
class SavingsAccount extends BankAccount {
    private $interestRate;

    public function __construct($accountNumber, $balance, $interestRate) {
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function applyInterest() {
        $interest = $this->balance * $this->interestRate;
        $this->balance += $interest;
        return "Interest of $$interest applied. New balance is $$this->balance.";
    }
}

class CheckingAccount extends BankAccount {
    private $overdraftLimit;

    public function __construct($accountNumber,$balance, $overdraftLimit) {
        parent::__construct($accountNumber, $balance);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw($amount) {
        if ($this->balance + $this->overdraftLimit >= $amount) {
            $this->balance -= $amount;
            return "Withdrew $$amount. New balance is $$this->balance.";
        } else {
            return "Insufficient funds!";
        }
    }
}