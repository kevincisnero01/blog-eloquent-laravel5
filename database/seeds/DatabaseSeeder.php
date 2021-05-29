<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Group::class,3)->create();

        factory(App\Level::class)->create(['name' => 'Oro']);
        factory(App\Level::class)->create(['name' => 'Plata']);
        factory(App\Level::class)->create(['name' => 'Bronce']);

        factory(App\User::class,5)->create()each(function ($user){

            $perfil = $user->profile->save(factory(App\Profile::class)->make());

            $profile->location()->save(factory(App\Location::class)->make());
            $user->groups()->attach($this->array(rand(1,3)));

            $user->image()->save(factory(App\Image::classs)->make([ 'url' => 'http://lorempixel.com/90/90']));
        });

    }

    public function array($max)
    {
        $values = [];

        for ($i=1; $i < $max; $i++) { 
            $values[] = $i;
        }

        return $values;
    }
}
