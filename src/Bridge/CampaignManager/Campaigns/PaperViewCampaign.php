<?php

namespace Src\Bridge\CampaignManager\Campaigns;

use Src\Bridge\CampaignManager\Campaign;

class PaperViewCampaign extends Campaign
{

    public function run()
    {
        $this->promotion->display();
    }
}
