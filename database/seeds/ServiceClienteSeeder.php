<?php

use Illuminate\Database\Seeder;

class ServiceClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startdate = date("y-m-d", strtotime('2020-07-04'));
        DB::table('service_cliente')->insert([
            'idService' => '1',
            'idCliente' => '1',
            'Date' => $startdate,
        ]);
        DB::table('service_cliente')->insert([
            'idService' => '2',
            'idCliente' => '2',
            'Date' => $startdate,
        ]);
    }
}
