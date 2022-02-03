<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification;

use App\Pattern\Behavioral\Specification\Specification\CompositeSpecification;

class Customer
{
    private int $customerAge;
    private CustomerLevel $customerLevel;
    private CustomerCountry $customerCountry;
    private bool $isMatchLevel;

    public function getCustomerAge(): int
    {
        return $this->customerAge;
    }

    public function setCustomerAge(int $customerAge): void
    {
        $this->customerAge = $customerAge;
    }

    public function getCustomerLevel(): CustomerLevel
    {
        return $this->customerLevel;
    }

    public function setCustomerLevel(CustomerLevel $customerLevel): void
    {
        $this->customerLevel = $customerLevel;
    }

    public function getCustomerCountry(): CustomerCountry
    {
        return $this->customerCountry;
    }

    public function setCustomerCountry(CustomerCountry $customerCountry): void
    {
        $this->customerCountry = $customerCountry;
    }

    public function isMatchLevel(): bool
    {
        return $this->isMatchLevel;
    }

    public function setMatchLevel(bool $isMatchLevel): void
    {
        $this->isMatchLevel = $isMatchLevel;
    }

    public function isMatchCustomerLevel(): bool
    {
        return $this->getCustomerAge() >= 18
            && in_array($this->getCustomerLevel(), [CustomerLevel::GREEN, CustomerLevel::RED, CustomerLevel::BLACK], true)
            && in_array($this->getCustomerCountry(), [CustomerCountry::RUSSIA, CustomerCountry::FINLAND], true);
    }
}
