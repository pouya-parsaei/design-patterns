<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\Solid\OCP\GenericEncoder;

class EncoderController extends Controller
{
    public function __construct(private GenericEncoder $genericEncoder)
    {

    }

    public function encode()
    {
        return $this->genericEncoder->encode('test','xml');
    }
}
