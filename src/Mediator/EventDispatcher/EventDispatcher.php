<?php

namespace Src\Mediator\EventDispatcher;

class EventDispatcher
{
    private array $observers = [];

    public function attach(string $event, Observer $observer): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    private function initEventGroup(string $event): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    public function detach(string $event, Observer $observer): void
    {
        foreach ($this->getEventObservers($event) as $key => $observerItem) {
            if ($observer == $observerItem) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    private function getEventObservers(string $event): array
    {
        $this->initEventGroup($event);

        return $this->observers[$event];
    }

    public function fire(string $event, object $emitter, $data = null)
    {
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }
}
