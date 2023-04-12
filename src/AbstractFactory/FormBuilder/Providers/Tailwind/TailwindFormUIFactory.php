<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind;

use Src\AbstractFactory\FormBuilder\Elements\Button;
use Src\AbstractFactory\FormBuilder\Elements\RadioButton;
use Src\AbstractFactory\FormBuilder\Elements\TextArea;
use Src\AbstractFactory\FormBuilder\Elements\TextInput;
use Src\AbstractFactory\FormBuilder\FormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindButton;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindRadioButton;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindTextArea;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindTextInput;

class TailwindFormUIFactory implements FormUIFactory
{

    public function createButton(): Button
    {
        return new TailwindButton();
    }

    public function createRadioButton(): RadioButton
    {
        return new TailwindRadioButton();
    }

    public function createTextArea(): TextArea
    {
        return new TailwindTextArea();
    }

    public function createTextInput(): TextInput
    {
        return new TailwindTextInput();
    }
}
