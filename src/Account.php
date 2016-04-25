<?php

class Account
{
    protected $balance = 0;

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        return $amount;
    }

}