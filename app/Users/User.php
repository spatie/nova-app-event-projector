<?php

namespace App\Users;

use App\Model;
use App\Users\Events\UserWasCreated;
use App\Users\Events\UserWasDeleted;
use App\Users\Events\UserWasUpdated;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable;
    use Authorizable;
    use CanResetPassword;
    use Notifiable;

    protected $storedModelEvents = [
        'created' => UserWasCreated::class,
        'updated' => UserWasUpdated::class,
        'deleted' => UserWasDeleted::class,
    ];
}
