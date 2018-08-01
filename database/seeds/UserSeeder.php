<?php

use App\Users\Events\UserWasCreated;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        collect(['brent', 'alex', 'sebastian', 'willem', 'freek'])->each(function(string $firstName) {
            $attributes = [
                'name' => $firstName,
                'email' => "{$firstName}@spatie.be",
                'password' => bcrypt('secret'),
            ];

            event(new UserWasCreated(Str::uuid(), $attributes));
        });
    }
}
