<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\AbstractFactory\FormBuilder\Elements\Button;

class BootstrapButton implements Button
{

    public function render()
    {
        echo '<button name="save-button" class="form-input">Button</button>';
    }
}
