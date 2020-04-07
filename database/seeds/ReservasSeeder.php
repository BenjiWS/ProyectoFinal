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
        $startdate = date("y-m-d", strtotime('2020-07-04'));
        DB::table('reservations')->insert([
            'idRoom' => '1',
            'idCliente' => '1',
            'startDate' => $startdate,
            'endDate' => $startdate,
            'type' => 'Online',
            'state' => 'En proceso',
            'penalty' => 0,
            'username' => 'prueba123',
            'password' =>  Hash::make('abc123'),
            'stateUsername' => false
        ]);

        DB::table('reservations')->insert([
            'idRoom' => '1',
            'idCliente' => '2',
            'startDate' => $startdate,
            'endDate' => $startdate,
            'type' => 'Online',
            'state' => 'En proceso',
            'penalty' => 0,
            'username' => 'pruebita123',
            'password' =>  Hash::make('efg567'),
            'stateUsername' => false
        ]);
    }
}
