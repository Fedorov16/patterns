<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(Customer $customer);
}
