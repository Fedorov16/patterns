<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification;

class CustomerIsMatch implements SpecificationInterface
{
    public function isSatisfiedBy(Customer $customer): bool
    {
        return
            $customer->getCustomerAge() >= 18
            && in_array($customer->getCustomerLevel(), [CustomerLevel::GREEN, CustomerLevel::RED, CustomerLevel::BLACK], true)
            && in_array($customer->getCustomerCountry(), [CustomerCountry::RUSSIA, CustomerCountry::FINLAND], true);
    }
}
