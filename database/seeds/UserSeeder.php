<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use App\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user =Role::where('name','User')->first();
        $role_admin =Role::where('name','Admin')->first();
        $user=new User();
        $user->ci = "67890";
        $user->name ='Benjamin';
        $user->lastname = 'Rosales';
        $user->email = 'benjaminrosales@hotmail.com';
        $user->phone = 7170311923;
        $user->address = 'Final Beijing';
        $user->username='benja123';
        $user->password =Hash::make('6489624rp');
        $user->state=true;
        $user->save();
        $user->roles()->attach($role_admin);

        $user=new User();
        $user->ci = "67890";
        $user->name ='Pedro';
        $user->lastname = 'Perez';
        $user->email = 'Pedroperez@hotmail.com';
        $user->phone = 6478962454;
        $user->address = 'Final Beijing 18';
        $user->username='pedro123';
        $user->password =Hash::make('6489624rp');
        $user->state=true;
        $user->save();
        $user->roles()->attach($role_user);


       /* DB::table('users')->insert([
            'ci' => '67890',
            'name' => 'Pedro',
            'lastname' => 'Gonzales',
            'email' => 'pedrogonzales@hotmail.com',
            'phone' => 71703119,
            'address' => 'Final Beijing',
            'username'=>'pedro123',
            'password' =>Hash::make('6489624rp'),
            'state'=>true    
        ]);*/
    }
}
