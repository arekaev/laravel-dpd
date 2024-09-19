<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO\Collections;

use Illuminate\Support\Collection;
use Arekaev\DPD\DTO\TrackingDto;

class TrackingDtoCollection extends Collection
{
    public function offsetGet($key): TrackingDto
    {
        return parent::offsetGet($key);
    }
}
