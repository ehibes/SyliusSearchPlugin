<?php

/*
 * This file is part of Monsieur Biz' Search plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusSearchPlugin\Checker;

use JoliCode\Elastically\Factory;

class ElasticsearchChecker implements ElasticsearchCheckerInterface
{
    private ?bool $isAvailable = null;

    public function check(): bool
    {
        if (null === $this->isAvailable) {
            $client = (new Factory())->buildClient();

            // Check client response
            try {
                $client->getStatus()->getResponse();
            } catch (\Exception $e) {
                $this->isAvailable = false;

                return $this->isAvailable;
            }

            $this->isAvailable = true;
        }

        return $this->isAvailable;
    }
}
