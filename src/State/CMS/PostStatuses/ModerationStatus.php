<?php

namespace Src\State\CMS\PostStatuses;

class ModerationStatus extends \Src\State\CMS\PostStatus
{

    public function draft()
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderation()
    {
        $this->post->transitionTo(new ModerationStatus());
    }

    public function published()
    {
        $this->post->transitionTo(new PublishedStatus());
    }
}
