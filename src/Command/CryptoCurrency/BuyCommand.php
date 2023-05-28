<?php

namespace Src\Command\CryptoCurrency;

class BuyCommand implements Command
{

    public function __construct(
        private CommandHandler $commandHandler,
        private int $amount
    )
    {

    }

    public function execute()
    {
        $this->commandHandler->buy($this);
    }
}
