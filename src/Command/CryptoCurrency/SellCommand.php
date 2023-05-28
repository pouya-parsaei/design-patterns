<?php

namespace Src\Command\CryptoCurrency;

class SellCommand implements Command
{

    public function __construct(
        private CommandHandler $commandHandler,
        private int $amount
    )
    {

    }

    public function execute()
    {
        $this->commandHandler->sell($this);
    }
}
