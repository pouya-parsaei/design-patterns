<?php

namespace Src\FactoryMethod\AccountRegistry;

class VIPAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new VIPAccount();
    }
}
