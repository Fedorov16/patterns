<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Composite;

class Order implements ProductInterface
{
    private string $name = 'order';

    private array $boxes;

    public function setBoxes(array $boxes): void
    {
        $this->boxes = $boxes;
    }

    public function calculateSum(): int
    {
        $sum = 0;
        foreach ($this->boxes as $box) {
            if (is_array($box)) {
                $sum += $this->calculateBox($box, $sum);
            } else {
                $sum += $box->calculateSum();
            }
        }
        dump(sprintf("%s: %s", $this->name, $sum));
        return $sum;
    }

    private function calculateBox($boxes, $sum): int
    {
        foreach ($boxes as $box) {
            if (is_array($box)) {
                $sum += $this->calculateBox($box, $sum);
            } else {
                $sum += $box->calculateSum();
            }
        }
        return $sum;
    }
}
