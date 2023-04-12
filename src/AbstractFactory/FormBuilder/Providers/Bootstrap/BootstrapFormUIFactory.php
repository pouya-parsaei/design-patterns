<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap;

use Src\AbstractFactory\FormBuilder\Elements\Button;
use Src\AbstractFactory\FormBuilder\Elements\RadioButton;
use Src\AbstractFactory\FormBuilder\Elements\TextArea;
use Src\AbstractFactory\FormBuilder\Elements\TextInput;
use Src\AbstractFactory\FormBuilder\FormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapButton;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapRadioButton;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapTextArea;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapTextInput;

class BootstrapFormUIFactory implements FormUIFactory
{

    public function createButton(): Button
    {
        return new BootstrapButton();
    }

    public function createRadioButton(): RadioButton
    {
        return new BootstrapRadioButton();
    }

    public function createTextArea(): TextArea
    {
        return new BootstrapTextArea();
    }

    public function createTextInput(): TextInput
    {
        return new BootstrapTextInput();
    }
}
