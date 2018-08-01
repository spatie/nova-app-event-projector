<?php

namespace App\Users\Events;

use Spatie\EventProjector\ShouldBeStored;

class UserWasDeleted implements ShouldBeStored
{
    /** @var string */
    public $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
