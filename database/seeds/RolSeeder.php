<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role ->name= "Admin";
        $role->state=true;
        $role->save();

        $role = new Role();
        $role ->name= "User";
        $role->state=true;
        $role->save();

        /*DB::table('roles')->insert([
            'name'=>'Administrador',
            'state'=>true
        ]);*/
    }
}
