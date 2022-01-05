<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//nota estaba con u pequeña
use App\Models\User;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' =>'admin',
            'email' => 'admin@sistem.liceo',
            'password' => bcrypt('admin1970'),
            'codigo'=>'admin',
            'fullacess'=>'yes',
        ])->assignRole('admin');


User::factory()->create();

    }
}
