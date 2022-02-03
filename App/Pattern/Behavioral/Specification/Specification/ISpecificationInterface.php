<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification\Specification;

use App\Pattern\Behavioral\Specification\Customer;

interface ISpecificationInterface
{
    public function isSatisfiedBy(Customer $customer);
    public function and(ISpecificationInterface $other);
    public function or(ISpecificationInterface $other);
    public function not();
}
