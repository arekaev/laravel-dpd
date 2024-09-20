<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;

class CityDto extends Data
{
    #[MapName('cityName')]
    public string $name;

    #[MapName('cityCode')]
    public string $code;

    #[MapName('cityId')]
    public string $cityId;

    #[MapName('countryCode')]
    public string $countryCode;

    #[MapName('regionCode')]
    public string $regionCode;

    #[MapName('regionName')]
    public string $regionName;

    #[MapName('abbreviation')]
    public string $abbreviation;

    #[MapName('indexMin')]
    public string|null $indexMin;

    #[MapName('indexMax')]
    public string|null $indexMax;
}
