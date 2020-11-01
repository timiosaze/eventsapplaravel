<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create()->each(function ($user) {
            $user->events()->saveMany(factory(App\Event::class,10)->make());
        });
    }
}
