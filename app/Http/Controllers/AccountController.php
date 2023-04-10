<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\FactoryMethod\AccountRegistry\AccountCreator;
use Src\FactoryMethod\AccountRegistry\GeneralAccountFactory;
use Src\FactoryMethod\AccountRegistry\GoldAccountFactory;

class AccountController extends Controller
{
    public function register(Request $request)
    {
        $service = $this->createAccountService($request->type);

        $service->registerAccount($request->user(), $request->balance);
    }

    private function createAccountService($type): AccountCreator
    {
        if ($type === 'gold') {
            return new GoldAccountFactory();
        }

        return new GeneralAccountFactory();

        // Or you can use dynamic classes
    }
}
