<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO\Collections;

use Illuminate\Support\Collection;
use Arekaev\DPD\DTO\DeliveryPriceOptionDto;

class DeliveryPriceOptionDtoCollection extends Collection
{
    public function offsetGet($key): DeliveryPriceOptionDto
    {
        return parent::offsetGet($key);
    }
}
