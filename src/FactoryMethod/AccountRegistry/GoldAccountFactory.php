<?php

namespace Src\FactoryMethod\AccountRegistry;

class GoldAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new GoldAccount();
    }
}
