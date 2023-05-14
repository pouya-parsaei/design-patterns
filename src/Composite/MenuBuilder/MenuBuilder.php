<?php

namespace Src\Composite\MenuBuilder;

class MenuBuilder
{
    public function buildMenu()
    {
        $menuItem1 = new MenuItem('google', 'https://www.google.com');
        $menuItem2 = new MenuItem('uber', 'https://www.uber.com');
        $menuItem3 = new MenuItem('amazon', 'https://www.amazon.com');

        $menu = new MenuCollection();
        $subMenu = new MenuCollection();
        $subMenu->add($menuItem1);
        $subMenu->add($menuItem2);
        $subMenu->add($menuItem3);
        $menu->add($subMenu);
        $menu->build();
    }
}
