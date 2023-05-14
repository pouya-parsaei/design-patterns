<?php

namespace Src\Proxy\GoogleApi;

interface GoogleMapApiInterface
{
    public function findPlaceByLatLng(string $lat, string $lng);
}
