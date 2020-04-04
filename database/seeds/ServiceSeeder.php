<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name'=>'Kentucky Fried Chicken',
            'price'=>"50",
            'description'=>"Servicio para solicitar comida  y/o bebidas a la habitacion",
            'type'=>"Servicio de comida",
            'state'=>true
        ]);
        DB::table('services')->insert([
            'name'=>'Netflix',
            'price'=>"20",
            'description'=>"Servicio para poder ver series o peliculas ",
            'type'=>"Servicio de stream",
            'state'=>true
        ]);
        DB::table('services')->insert([
            'name'=>'Uber',
            'price'=>"100",
            'description'=>"Servicio para poder solicitar un taxi",
            'type'=>"Servicio de movilidad",
            'state'=>true
        ]);
    }
}
