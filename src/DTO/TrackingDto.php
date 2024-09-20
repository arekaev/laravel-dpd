<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;

class TrackingDto extends Data
{
    #[MapName('clientOrderNr')]
    public string $clientOrderNumber;

    #[MapName('dpdOrderNr')]
    public string $trackNumber;

    #[MapName('dpdParcelNr')]
    public string $parcelNumber;

    #[MapName('pickupDate')]
    public string $pickupDate;

    #[MapName('planDeliveryDate')]
    public string $planDeliveryDate;

    #[MapName('orderPhysicalWeight')]
    public string $orderPhysicalWeight;

    #[MapName('orderVolume')]
    public string $orderVolume;

    #[MapName('orderVolumeWeight')]
    public string $orderVolumeWeight;

    #[MapName('orderPayWeight')]
    public string $orderPayWeight;

    #[MapName('orderCost')]
    public string $orderCost;

    #[MapName('parcelPhysicalWeight')]
    public string $parcelPhysicalWeight;

    #[MapName('parcelVolume')]
    public string $parcelVolume;

    #[MapName('parcelVolumeWeight')]
    public string $parcelVolumeWeight;

    #[MapName('parcelPayWeight')]
    public string $parcelPayWeight;

    #[MapName('parcelLength')]
    public string $parcelLength;

    #[MapName('parcelWidth')]
    public string $parcelWidth;

    #[MapName('parcelHeight')]
    public string $parcelHeight;

    #[MapName('newState')]
    public string $status;

    #[MapName('stateTranslated')]
    public string $translatedStatus;

    #[MapName('transitionTime')]
    public string $transitionTime;

    #[MapName('terminalCode')]
    public string $terminalCode;

    #[MapName('terminalCity')]
    public string $terminalCity;

    #[MapName('consignee')]
    public string $consignee;
}
