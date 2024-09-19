<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO\Collections;

use Illuminate\Support\Collection;
use Arekaev\DPD\DTO\TerminalDto;

class TerminalDtoCollection extends Collection
{
    public function offsetGet($key): TerminalDto
    {
        return parent::offsetGet($key);
    }
}
