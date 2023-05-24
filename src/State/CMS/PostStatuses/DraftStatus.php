<?php

namespace Src\State\CMS\PostStatuses;

use Src\State\CMS\Exceptions\InvalidStatusException;

class DraftStatus extends \Src\State\CMS\PostStatus
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
        throw new InvalidStatusException('Not possible to publish a post when the status is draft');
    }
}
