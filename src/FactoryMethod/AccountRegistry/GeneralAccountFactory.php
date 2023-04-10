<?php

namespace Src\FactoryMethod\AccountRegistry;

class GeneralAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new GoldAccount();
    }

}
