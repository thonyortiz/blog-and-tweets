<?php

use App\Entry;
use App\User;
use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //consultar la lista de usuarios para colocar 10 publicaciones por usuario
        $users = user::all();

        $users->each(function ($user) {
            factory(Entry::class, 10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
