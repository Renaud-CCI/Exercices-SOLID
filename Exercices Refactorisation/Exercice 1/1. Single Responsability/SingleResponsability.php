<?php

// TODO refactoriser le code pour respecter le principe Single Responsability de la programmation SOLID


class NoBalanceAvailableException extends \Exception {}

class Product {
    private $value;
    public function getValue() {
        return $this->value;
    }
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
}

class Account 
{
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }
    public function debit($value) {
        $this->balance -= $value;
    }
}

class Customer 
{
    private $account;

    public function __construct(Account $account) {
        $this->account = $account;
    }
    public function getAccount() {
        return $this->account;
    }

    public function setAccount(Account $account) {
        $this->account = $account;
        return $this;
    } 

    public function haveBalanceAvailable($value) {
        return $this->account->getBalance() >= $value;
    }

}

class Cart {
    private $products;

    public function __construct(array $products) {
        $this->products = $products;        
    }

    public function getValue() {
        $value = 0;
        foreach ($this->products as $product) {
            $value += $product->getValue();
        }
        return $value;
    } 
}

class Sale
{
    private $cart;
    private $customer;

    public function __construct(Cart $cart, Customer $customer) {
        $this->cart = $cart;
        $this->customer = $customer;
    }

    public function sell() {
        $value = $this->cart->getValue();
        
        if (!$this->customer->haveBalanceAvailable($value)) {
            throw new NoBalanceAvailableException();
        }

        $this->customer->getAccount()->debit($value);
    }
    
}