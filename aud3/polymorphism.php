<?php
class BankAccount {
    protected $balance;

    public function __construct($balance = 0) {
        $this->balance = $balance;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrawn: $$amount. New balance: $$this->balance";
        } else {
            return "Insufficient funds!";
        }
    }
}

class SavingsAccount extends BankAccount {
    public function withdraw($amount) {
        if ($this->balance >= $amount && $amount <= 1000) {
            return parent::withdraw($amount);
        } else {
            return "Withdrawals are limited to $1000 per day for savings accounts!";
        }
    }
}

class CheckingAccount extends BankAccount {
    private $overdraftLimit;

    public function __construct($balance, $overdraftLimit) {
        parent::__construct($balance);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw($amount) {
        if ($this->balance + $this->overdraftLimit >= $amount) {
            $this->balance -= $amount;
            return "Withdrawn: $$amount. New balance: $$this->balance";
        } else {
            return "Overdraft limit exceeded!";
        }
    }
}

function handleTransaction(BankAccount $account, $amount) {
    echo $account->withdraw($amount);
}

$savings = new SavingsAccount(5000);
$checking = new CheckingAccount(2000, 500);

handleTransaction($savings, 1500);  // Savings account withdrawal with limit
handleTransaction($checking, 2500); // Checking account with overdraft