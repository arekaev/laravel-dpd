<?php

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
//use Spatie\DataTransferObject\Attributes\MapFrom;

class DeliveryPriceOptionDto extends Data
{

    #[MapName('serviceCode')]
    public string $serviceCode;

    #[MapName('serviceName')]
    public string $serviceName;

    #[MapName('cost')]
    public string $cost;

    #[MapName('days')]
    public string $days;
}
