<?php

class User
{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
$user1 = new User("Ema");

$user2 = $user1;
echo $user1 === $user2 ? "Equal\n" : "Not Equal\n";
echo $user2->getName() . "\n";

$user3 = clone $user1;
echo $user1 === $user3 ? "Equal\n" : "Not Equal\n";
echo $user3->getName();
