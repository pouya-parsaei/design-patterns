<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

class TailwindButton implements \Src\AbstractFactory\FormBuilder\Elements\Button
{

    public function render()
    {
        echo '<button name="save-button" class="btn btn-lg">Button</button>';
    }
}
