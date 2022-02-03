<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Specification;

enum CustomerLevel: string
{
    case YELLOW = 'yellow';
    case GREEN = 'green';
    case RED = 'red';
    case BLUE = 'blue';
    case BLACK = 'black';
}
