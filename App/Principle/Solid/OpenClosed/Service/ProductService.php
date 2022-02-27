<?php

declare(strict_types=1);

namespace App\Principle\Solid\OpenClosed\Service;

use App\Principle\Solid\OpenClosed\Entity\Product;
use App\Principle\Solid\OpenClosed\Logger\FileLogger;

class ProductService
{
    private Product $product;
    private FileLogger $logger;

    public function __construct(Product $product, FileLogger $logger)
    {
        $this->product = $product;
        $this->logger = $logger;
    }

    public function prepareProduct(): void
    {
//        Do a lot of things

        $this->logger->logToFile($this->product->getName());
    }
}
