<?php

namespace Src\Bridge\CampaignManager\Promotions;

use Src\Bridge\CampaignManager\Promotion;

class PopupPromotion implements Promotion
{

    public function __construct(private string $bannerUrl, private string $url)
    {

    }

    public function display()
    {
        return <<<POPUP
            <div>
                <a href="$this->url">
                    <img src="$this->bannerUrl">
                </a>
            </div>
        POPUP;

    }
}
