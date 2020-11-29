<?php

namespace Statamic\Events;

class UserBlueprintFound extends Event
{
    public $blueprint;
    public $user;

    public function __construct($blueprint, $user = null)
    {
        $this->blueprint = $blueprint;
        $this->user = $user;
    }
}
