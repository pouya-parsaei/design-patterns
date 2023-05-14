<?php

namespace Src\Bridge\CampaignManager\Promotions;

use Src\Bridge\CampaignManager\Promotion;

class TextPromotion implements Promotion
{

    public function __construct(private readonly string $title, private readonly string $url)
    {

    }
    public function display()
    {
        return <<<TEXT
            <a href="$this->url"><span>$this->title</span></a>
        TEXT;

    }
}
