<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor;

use App\Pattern\Behavioral\Visitor\Entity\Campaign;
use App\Pattern\Behavioral\Visitor\Entity\Material;
use App\Pattern\Behavioral\Visitor\Entity\Product;

class InfoVisitor implements VisitorInterface
{
    public function visitProduct(Product $product): string
    {
        return sprintf("%s -> %s", $product->getCode(), $product->getName());
    }

    public function visitCampaign(Campaign $campaign): string
    {
        return sprintf("%s -> %s", $campaign->getId(), $campaign->getTitle());
    }

    public function visitMaterial(Material $material): string
    {
        return sprintf("%s -> %s", $material->getId(), $material->getIconName());
    }
}
