<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PermissionRolSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ReservasSeeder::class);
    }
}
