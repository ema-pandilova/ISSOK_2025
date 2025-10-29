<?php
abstract class Transaction {
    protected $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    abstract public function execute();
}

class Deposit extends Transaction {
    public function execute() {
        return "Depositing $$this->amount.";
    }
}

// Usage
$deposit = new Deposit(500);
echo $deposit->execute(); // Output: Depositing $500.