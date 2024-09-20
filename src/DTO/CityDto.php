<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;

class CityDto extends Data
{
    #[MapInputName('cityName')]
    public string $name;

    #[MapInputName('cityCode')]
    public string $code;

    #[MapInputName('cityId')]
    public string $cityId;

    #[MapInputName('countryCode')]
    public string $countryCode;

    #[MapInputName('regionCode')]
    public string $regionCode;

    #[MapInputName('regionName')]
    public string $regionName;

    #[MapInputName('abbreviation')]
    public string $abbreviation;

    #[MapInputName('indexMin')]
    public string|null $indexMin;

    #[MapInputName('indexMax')]
    public string|null $indexMax;
}
