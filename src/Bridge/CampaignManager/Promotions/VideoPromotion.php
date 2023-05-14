<?php

namespace Src\Bridge\CampaignManager\Promotions;

use Src\Bridge\CampaignManager\Promotion;

class VideoPromotion implements Promotion
{

    public function __construct(private string $title, private string $videoUrl)
    {

    }

    public function display()
    {
        <<<VIDEO
            <video src="$this->videoUrl">$this->title</video>
        VIDEO;

    }
}
