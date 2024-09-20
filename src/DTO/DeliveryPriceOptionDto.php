<?php

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
//use Spatie\DataTransferObject\Attributes\MapFrom;

class DeliveryPriceOptionDto extends Data
{

    #[MapFrom('serviceCode')]
    public string $serviceCode;

    #[MapFrom('serviceName')]
    public string $serviceName;

    #[MapFrom('cost')]
    public string $cost;

    #[MapFrom('days')]
    public string $days;
}
