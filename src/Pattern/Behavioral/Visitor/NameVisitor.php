<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor;

use App\Pattern\Behavioral\Visitor\Entity\Campaign;
use App\Pattern\Behavioral\Visitor\Entity\Material;
use App\Pattern\Behavioral\Visitor\Entity\Product;

class NameVisitor implements VisitorInterface
{
    public function visitProduct(Product $product): string
    {
        return $product->getName();
    }

    public function visitCampaign(Campaign $campaign): string
    {
        return $campaign->getTitle();
    }

    public function visitMaterial(Material $material): string
    {
        return $material->getIconName();
    }
}
