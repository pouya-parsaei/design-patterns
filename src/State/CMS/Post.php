<?php

namespace Src\State\CMS;

use Src\State\CMS\PostStatuses\DraftStatus;

class Post
{
    public function __construct(private string $title, private string $content)
    {
        $this->transitionTo(new DraftStatus());
    }

    public function transitionTo(PostStatus $status):void
    {
        $this->status = $status;

        $this->status->setPost($this);
    }

    public function draft():void
    {
        $this->status->draft();
    }

    public function moderate():void
    {
        $this->status->moderation();
    }

    public function publish():void
    {
        $this->status->publish();
    }
}
