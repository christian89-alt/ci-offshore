<?php

declare(strict_types=1);

use Sunfox\PriceCalculator\Discount\PercentDiscount;
use Sunfox\PriceCalculator\PriceCalculator;

$calc = (new PriceCalculator)
    ->setBasePrice(1983.48)
    ->setDiscount(new PercentDiscount(10))
    ->setVatRate(21);

foreach ($calc->calculate()->toArray() as $k => $v) {
    echo "{$k}: {$v}\n";
}
