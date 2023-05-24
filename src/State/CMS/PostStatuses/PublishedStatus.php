<?php

namespace Src\State\CMS\PostStatuses;

use Src\State\CMS\Exceptions\InvalidStatusException;

class PublishedStatus extends \Src\State\CMS\PostStatus
{

    public function draft()
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderation()
    {
        throw new InvalidStatusException('Published post could not be moderation');
    }

    public function published()
    {
        throw new InvalidStatusException('Published post could not be published again');
    }
}
