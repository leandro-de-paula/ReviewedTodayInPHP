<?php

namespace Abstraction;

ini_set("display_errors", true);
error_reporting(E_ALL);

abstract class Bank
{
    protected $balance;
    protected $balanceLimit;
    protected $fees;

    abstract protected function deposit($d);
    abstract protected function toWithdraw($t);

    public function setBalance($b){
        $this->balance = $b;
    }

    public function getBalance(){
        return $this->balance;
    }
}

class Bradesco extends Bank {
    public function toWithdraw($t){
        $this->balance -= $t;
        echo "<hr>Got it: " . $t;
    }

    public function deposit($d){
        $this->balance += $d;
        echo "<hr>Deposited: " . $d;
    }
}

// class Nubank extends Bank {}

// class C6bank extends Bank {}

$bradesco = new Bradesco();
$bradesco->setBalance(1000);
echo "<hr> Balance: " . $bradesco->getBalance();
$bradesco->toWithdraw(500);
echo "<hr> Balance: " . $bradesco->getBalance();
$bradesco->deposit(250);
echo "<hr> Balance: " . $bradesco->getBalance();
$bradesco->toWithdraw(500);
echo "<hr> Balance: " . $bradesco->getBalance();
$bradesco->toWithdraw(500);
echo "<hr> Balance: " . $bradesco->getBalance();
$bradesco->deposit(1250);
echo "<hr> Balance: " . $bradesco->getBalance();