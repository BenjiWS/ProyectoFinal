<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'ci' => '67890',
            'name' => 'Pedro',
            'lastname' => 'Gonzales',
            'email' => 'pedrogonzales@hotmail.com',
            'phone' => 71703119,
            'address' => 'Final Beijing',
            'username'=>'pedro123',
            'password' =>Hash::make('6489624rp'),
            'state'=>true    
        ]);
    }
}
