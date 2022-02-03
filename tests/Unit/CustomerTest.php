<?php

declare(strict_types=1);

namespace Unit;

use App\Pattern\Behavioral\Specification\Customer;
use App\Pattern\Behavioral\Specification\CustomerCountry;
use App\Pattern\Behavioral\Specification\CustomerIsMatch;
use App\Pattern\Behavioral\Specification\CustomerLevel;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testIsSatisfiedByLevelBySimpleWay(): void
    {
        $customer = new Customer();
        $customer->setCustomerLevel(CustomerLevel::GREEN);
        $customer->setCustomerCountry(CustomerCountry::RUSSIA);
        $customer->setCustomerAge(18);

        $isMatch = $customer->getCustomerAge() >= 18
            && in_array($customer->getCustomerLevel(), [CustomerLevel::GREEN, CustomerLevel::RED, CustomerLevel::BLACK], true)
            && in_array($customer->getCustomerCountry(), [CustomerCountry::RUSSIA, CustomerCountry::FINLAND], true);

        $this->assertEquals(true, $isMatch);
    }

    public function testIsSatisfiedByLevelByNormallyWay(): void
    {
        $customer = new Customer();
        $customer->setCustomerLevel(CustomerLevel::GREEN);
        $customer->setCustomerCountry(CustomerCountry::RUSSIA);
        $customer->setCustomerAge(18);

        $this->assertEquals(true, $customer->isMatchCustomerLevel());
    }

    public function testIsSatisfiedByLevelByExpertWay(): void
    {
        $customer = new Customer();
        $customer->setCustomerLevel(CustomerLevel::GREEN);
        $customer->setCustomerCountry(CustomerCountry::RUSSIA);
        $customer->setCustomerAge(18);

        $customerIsMatch = new CustomerIsMatch();

        $this->assertEquals(true, $customerIsMatch->isSatisfiedBy($customer));
    }
}
