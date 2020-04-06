<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso=new Permission();
        $permiso->name = "Ver Usuarios";
        $permiso->slug='view_user';
        $permiso->description = 'Ver usuarios creados';
        $permiso->save();
        
        $permiso=new Permission();
        $permiso->name = "Ver Vista Create";
        $permiso->slug='view_create_user';
        $permiso->description = 'Ver creacion user';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Create User";
        $permiso->slug='create_user';
        $permiso->description = 'Ver creacion user';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Actualizar User";
        $permiso->slug='view_actualizar';
        $permiso->description = 'Ver vista actualizar';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Actualizar Controller";
        $permiso->slug='actualizar';
        $permiso->description = 'Actualizar user';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Ver Roles";
        $permiso->slug='view_role';
        $permiso->description = 'Ver roles creados';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Actualizar Roles";
        $permiso->slug='update_role';
        $permiso->description = 'Actualizar Rol';
        $permiso->save();


        $permiso=new Permission();
        $permiso->name = "Ver Room";
        $permiso->slug='view_room';
        $permiso->description = 'Ver room creados';
        $permiso->save();
        
        $permiso=new Permission();
        $permiso->name = "Ver Vista Create";
        $permiso->slug='view_create_room';
        $permiso->description = 'Ver creacion room';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Creacion Controller";
        $permiso->slug='create_room';
        $permiso->description = 'Creacion controller';
        $permiso->save();


        $permiso=new Permission();
        $permiso->name = "Vista Actualizar";
        $permiso->slug='view_update_room';
        $permiso->description = 'Ver vista actualizar';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Actualizar Controller";
        $permiso->slug='update_room';
        $permiso->description = 'Actualizar room';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Ver Services";
        $permiso->slug='view_service';
        $permiso->description = 'Ver services creados';
        $permiso->save();

        $permiso=new Permission();
        $permiso->name = "Ver Permisos";
        $permiso->slug='view_permission';
        $permiso->description = 'Ver permisos creados';
        $permiso->save();

    }
}
