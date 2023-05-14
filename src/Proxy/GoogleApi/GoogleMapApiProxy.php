<?php

namespace Src\Proxy\GoogleApi;

class GoogleMapApiProxy implements GoogleMapApiInterface
{

    public function __construct(private GoogleMapApiInterface $googleMapApi)
    {

    }

    public function findPlaceByLatLng(string $lat, string $lng)
    {
        if (app()->environment() === 'production') {
            return $this->googleMapApi->findPlaceByLatLng($lat, $lng);
        }

        return null;
    }
}
