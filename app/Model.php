<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\StoresModelEvents;

abstract class Model extends Eloquent
{
    use StoresModelEvents;

    public $incrementing = false;

    public $timestamps = false;

    protected $guarded = [];
}
