<?php

use Illuminate\Database\Seeder;
use App\permission_role;
class PermissionRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=1;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=2;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=3;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=4;
       $permiso_rol->role_id=1;
       $permiso_rol->save();


       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=5;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=6;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=7;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=8;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=9;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=10;
       $permiso_rol->role_id=1;
       $permiso_rol->save();


       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=11;
       $permiso_rol->role_id=1;
       $permiso_rol->save();
    
       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=12;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=13;
       $permiso_rol->role_id=1;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=14;
       $permiso_rol->role_id=1;
       $permiso_rol->save();






       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=15;
       $permiso_rol->role_id=2;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=16;
       $permiso_rol->role_id=2;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=17;
       $permiso_rol->role_id=2;
       $permiso_rol->save();


       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=18;
       $permiso_rol->role_id=2;
       $permiso_rol->save();
    
       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=19;
       $permiso_rol->role_id=2;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=20;
       $permiso_rol->role_id=2;
       $permiso_rol->save();

       $permiso_rol=new permission_role;
       $permiso_rol->permission_id=21;
       $permiso_rol->role_id=2;
       $permiso_rol->save();
    }
}
