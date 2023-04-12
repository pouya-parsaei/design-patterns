<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\TextInput;

class TailwindTextInput implements TextInput
{

    public function render()
    {
        echo '<input class="w-100 mt-10"/>';
    }
}
