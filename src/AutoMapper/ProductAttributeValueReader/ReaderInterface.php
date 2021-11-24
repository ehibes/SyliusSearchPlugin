<?php

/*
 * This file is part of SyliusSearchPlugin.
 *
 * (c) Monsieur Biz
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusSearchPlugin\AutoMapper\ProductAttributeValueReader;

use Sylius\Component\Product\Model\ProductAttributeValueInterface;

interface ReaderInterface
{
    /**
     * @return string|array
     */
    public function getValue(ProductAttributeValueInterface $productAttribute);
}
