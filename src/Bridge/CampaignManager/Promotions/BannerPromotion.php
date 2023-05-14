<?php

namespace Src\Bridge\CampaignManager\Promotions;

use Src\Bridge\CampaignManager\Promotion;

class BannerPromotion implements Promotion
{

    public function __construct(private string $title, private string $url, private string $bannerUrl)
    {

    }
    public function display()
    {
        return <<<BANNER
        <a title="$this->title" href="$this->url"><img src="$this->bannerUrl" alt="$this->title"></a>
        BANNER;

    }
}
