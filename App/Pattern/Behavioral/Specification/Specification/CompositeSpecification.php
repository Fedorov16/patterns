<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification\Specification;

use App\Pattern\Behavioral\Specification\Customer;

abstract class CompositeSpecification implements ISpecificationInterface
{
    abstract public function IsSatisfiedBy(Customer $customer);

    public function or(ISpecificationInterface $other)
    {
        return new OrSpecification($this, $other);
    }

    public function and(ISpecificationInterface $other)
    {
        return new AndSpecification($this, $other);
    }

    public function not()
    {
        return new NotSpecification($this);
    }
}
