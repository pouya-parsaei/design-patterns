<?php

namespace Src\Command\CryptoCurrency;

class TradeService
{

    public function __construct(private CommandHandler $commandHandler)
    {

    }

    public function buy(int $amount)
    {
        $buyCommand = new BuyCommand($this->commandHandler,$amount);
        $buyCommand->execute();
    }
}
