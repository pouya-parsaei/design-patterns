<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\AbstractFactory\FormBuilder\Elements\TextInput;

class BootstrapTextInput implements TextInput
{

    public function render()
    {
        echo '<input class="form-control  mw-10"/>';
    }
}
