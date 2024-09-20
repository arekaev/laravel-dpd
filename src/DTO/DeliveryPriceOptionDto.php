<?php

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;;

class DeliveryPriceOptionDto extends Data
{

    #[MapInputName('serviceCode')]
    public string $serviceCode;

    #[MapInputName('serviceName')]
    public string $serviceName;

    #[MapInputName('cost')]
    public string $cost;

    #[MapInputName('days')]
    public string $days;
}
