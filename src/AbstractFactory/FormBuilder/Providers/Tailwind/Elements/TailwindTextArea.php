<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\TextArea;

class TailwindTextArea implements TextArea
{

    public function render()
    {
        echo '<textarea class="tailwind-class" rows="10" cols="30">Text Area Content</textarea>';
    }
}
