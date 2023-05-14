<?php

namespace Src\Composite\MenuBuilder;

class MenuCollection implements MenuComponent
{

    private array $menuItems = [];

    public function add(MenuComponent $menuComponent)
    {
        $this->menuItems[] = $menuComponent;
    }

    public function build()
    {
        echo '<div class="menu">';
        foreach ($this->menuItems as $menuItem) {
            $menuItem->build();
        }
        echo '</div>';
    }
}
