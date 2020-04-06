<?php

use Illuminate\Database\Seeder;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'idRoom' => '1',
            'idCliente' => '1',
            'startDate' => '2020-05-04',
            'endDate' => '2020-05-30',
            'type' => 'Online',
            'state' => 'En proceso',
            'penalty' => 0,
            'username' => 'prueba123',
            'password' => 'abc24',
            'stateUsername' => false
        ]);

        DB::table('reservations')->insert([
            'idRoom' => '1',
            'idCliente' => '2',
            'startDate' => '2020-05-04',
            'endDate' => '2020-30-04',
            'type' => 'Online',
            'state' => 'En proceso',
            'penalty' => 0,
            'username' => 'pruebita123',
            'password' => 'efg56',
            'stateUsername' => false
        ]);
    }
}
