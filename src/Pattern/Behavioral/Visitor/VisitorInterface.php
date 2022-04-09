<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor;

use App\Pattern\Behavioral\Visitor\Entity\Campaign;
use App\Pattern\Behavioral\Visitor\Entity\Material;
use App\Pattern\Behavioral\Visitor\Entity\Product;

interface VisitorInterface
{
    public function visitProduct(Product $product): string;
    public function visitCampaign(Campaign $campaign): string;
    public function visitMaterial(Material $material): string;
}
