<?php

namespace Src\Composite\Concept;

class Composite implements Component
{

    private array $components = [];

    public function addComponent(Component $component)
    {
        $this->components[] = $component;
    }

    public function operation()
    {
        foreach ($this->components as $component) {
            $component->operation();
        }
    }
}
