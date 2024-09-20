<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
//use Spatie\DataTransferObject\Attributes\MapFrom;

class TerminalDto extends Data
{
    #[MapName('terminalName')]
    public string $name;

    #[MapName('terminalCode')]
    public string $code;

    #[MapName('address.countryCode')]
    public string $countryCode;

    #[MapName('address.regionCode')]
    public string $regionCode;

    #[MapName('address.regionName')]
    public string $regionName;

    #[MapName('address.cityId')]
    public string $cityId;

    #[MapName('address.cityCode')]
    public string $cityCode;

    #[MapName('address.cityName')]
    public string $cityName;

    #[MapName('address.index')]
    public string $index;

    #[MapName('address.street')]
    public string|null $street;

    #[MapName('address.streetAbbr')]
    public string|null $streetAbbr;

    #[MapName('address.houseNo')]
    public string|null $house;

    #[MapName('address.structure')]
    public string|null $structure;

    #[MapName('address.ownership')]
    public string|null $ownership;

    #[MapName('address.descript')]
    public string|null $description;

    #[MapName('geoCoordinates.latitude')]
    public float|null $latitude;

    #[MapName('geoCoordinates.longitude')]
    public float|null $longitude;
}
