<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'ci' => '9352017',
            'name' => 'Christopher',
            'lastname' => 'Huanca',
            'email' => 'chrisshuayhua@hotmail.com',
            'phone' => '71754190',
            'address' => 'Av. Segunda',
            'number_Credit_Card' => '123456789',
            'date_Card' => '2024-10',
            'number_CVV' => '1234',
            'username' => 'Chriss21',
            'password' => 'Chriss25',
        ]);
        DB::table('clientes')->insert([
            'ci' => '1233456',
            'name' => 'Darihen',
            'lastname' => 'Rosales',
            'email' => 'darihenrosales@hotmail.com',
            'phone' => '72780481',
            'address' => 'Av. Tercera',
            'number_Credit_Card' => '123456789',
            'date_Card' => '2020-12',
            'number_CVV' => '1234',
            'username' => 'darihen123',
            'password' => 'darihen123',
        ]);
    }
}
