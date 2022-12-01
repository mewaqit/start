<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Channel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Channel::factory(10)->create();

        /*
        \App\Models\Channel::factory()->create([
             'name' => 'Test User',
         ]);
        */
    }
}
