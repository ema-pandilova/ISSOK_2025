<?php
interface Transferable {
    public function transfer($amount, $toAccount);
}

class CheckingAccount implements Transferable {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function transfer($amount, $toAccount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            $toAccount->deposit($amount);
            return "Transferred $$amount.";
        } else {
            return "Insufficient funds for transfer!";
        }
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }
}

$account1 = new CheckingAccount(2000);
$account2 = new CheckingAccount(1000);
echo $account1->transfer(500, $account2); // Output: Transferred $500.