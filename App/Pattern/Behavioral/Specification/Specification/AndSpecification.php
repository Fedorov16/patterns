<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification\Specification;

use App\Pattern\Behavioral\Specification\Customer;

class AndSpecification extends CompositeSpecification
{
    private ISpecificationInterface $one;
    private ISpecificationInterface $two;

    public function __construct(ISpecificationInterface $one, ISpecificationInterface $two)
    {
        $this->one = $one;
        $this->two = $two;
    }

    public function IsSatisfiedBy(Customer $customer): bool
    {
        return $this->one->isSatisfiedBy($customer) && $this->two->isSatisfiedBy($customer);
    }
}
