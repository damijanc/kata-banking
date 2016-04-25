<?php

class AccountTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {

    }

    public function testCreateAccount()
    {
        $account = new Account();
        $this->assertSame(0, $account->getBalance());
    }

    public function testDeposit()
    {
        $account = new Account();
        $account->deposit(10);

        $this->assertSame(10, $account->getBalance());
    }

    public function testWithdrawal()
    {
        $account = new Account();
        $account->deposit(-10);

        $this->assertSame(-10, $account->getBalance());
    }
}

