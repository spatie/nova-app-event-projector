<?php

namespace App\Users\Events;

use Spatie\EventProjector\ShouldBeStored;

class UserWasCreated implements ShouldBeStored
{
    /** @var string */
    public $id;

    /** @var array */
    public $attributes;

    public function __construct(string $id, array $attributes)
    {
        $this->id = $id;
        $this->attributes = $attributes;
    }
}
