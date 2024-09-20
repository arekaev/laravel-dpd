<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;

class TerminalDto extends Data
{
    #[MapInputName('terminalName')]
    public string $name;

    #[MapInputName('terminalCode')]
    public string $code;

    #[MapInputName('address.countryCode')]
    public string $countryCode;

    #[MapInputName('address.regionCode')]
    public string $regionCode;

    #[MapInputName('address.regionName')]
    public string $regionName;

    #[MapInputName('address.cityId')]
    public string $cityId;

    #[MapInputName('address.cityCode')]
    public string $cityCode;

    #[MapInputName('address.cityName')]
    public string $cityName;

    #[MapInputName('address.index')]
    public string $index;

    #[MapInputName('address.street')]
    public string|null $street;

    #[MapInputName('address.streetAbbr')]
    public string|null $streetAbbr;

    #[MapInputName('address.houseNo')]
    public string|null $house;

    #[MapInputName('address.structure')]
    public string|null $structure;

    #[MapInputName('address.ownership')]
    public string|null $ownership;

    #[MapInputName('address.descript')]
    public string|null $description;

    #[MapInputName('geoCoordinates.latitude')]
    public float|null $latitude;

    #[MapInputName('geoCoordinates.longitude')]
    public float|null $longitude;
}
