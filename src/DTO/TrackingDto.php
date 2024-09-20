<?php

declare(strict_types=1);

namespace Arekaev\DPD\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;

class TrackingDto extends Data
{
    #[MapInputName('clientOrderNr')]
    public string $clientOrderNumber;

    #[MapInputName('dpdOrderNr')]
    public string $trackNumber;

    #[MapInputName('dpdParcelNr')]
    public string $parcelNumber;

    #[MapInputName('pickupDate')]
    public string $pickupDate;

    #[MapInputName('planDeliveryDate')]
    public string $planDeliveryDate;

    #[MapInputName('orderPhysicalWeight')]
    public string $orderPhysicalWeight;

    #[MapInputName('orderVolume')]
    public string $orderVolume;

    #[MapInputName('orderVolumeWeight')]
    public string $orderVolumeWeight;

    #[MapInputName('orderPayWeight')]
    public string $orderPayWeight;

    #[MapInputName('orderCost')]
    public string $orderCost;

    #[MapInputName('parcelPhysicalWeight')]
    public string $parcelPhysicalWeight;

    #[MapInputName('parcelVolume')]
    public string $parcelVolume;

    #[MapInputName('parcelVolumeWeight')]
    public string $parcelVolumeWeight;

    #[MapInputName('parcelPayWeight')]
    public string $parcelPayWeight;

    #[MapInputName('parcelLength')]
    public string $parcelLength;

    #[MapInputName('parcelWidth')]
    public string $parcelWidth;

    #[MapInputName('parcelHeight')]
    public string $parcelHeight;

    #[MapInputName('newState')]
    public string $status;

    #[MapInputName('stateTranslated')]
    public string $translatedStatus;

    #[MapInputName('transitionTime')]
    public string $transitionTime;

    #[MapInputName('terminalCode')]
    public string $terminalCode;

    #[MapInputName('terminalCity')]
    public string $terminalCity;

    #[MapInputName('consignee')]
    public string $consignee;
}
