<?php

namespace App\Users\Projectors;

use App\Users\Events\UserWasCreated;
use App\Users\Events\UserWasDeleted;
use App\Users\Events\UserWasUpdated;
use App\Users\User;
use Illuminate\Support\Facades\DB;
use Spatie\EventProjector\Projectors\Projector;
use Spatie\EventProjector\Projectors\ProjectsEvents;

class UsersProjector implements Projector
{
    use ProjectsEvents;

    protected $handlesEvents = [
        UserWasCreated::class,
        UserWasUpdated::class,
        UserWasDeleted::class,
    ];

    public function onUserWasCreated(UserWasCreated $event)
    {
        User::create(['id' => $event->id] + $event->attributes);
    }

    public function onUserWasUpdated(UserWasUpdated $event)
    {
        User::findOrFail($event->id)
            ->update($event->attributes);
    }

    public function onUserWasDeleted(UserWasDeleted $event)
    {
        User::findOrFail($event->id)
            ->delete();
    }

    public function resetState()
    {
        DB::table('users')->truncate();
    }
}
