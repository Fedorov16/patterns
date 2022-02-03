<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification\Specification;

use App\Pattern\Behavioral\Specification\Customer;

class NotSpecification extends CompositeSpecification
{
    private ISpecificationInterface $one;

    public function __construct(ISpecificationInterface $one)
    {
        $this->one = $one;
    }

    public function IsSatisfiedBy(Customer $customer): bool
    {
        return !$this->one->isSatisfiedBy($customer);
    }
}
