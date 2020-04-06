<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name'=>'A15',
            'price'=>"200",
            'type'=>"Big",
            'numberBeds'=>'3',
            'numberBathroom'=>"2",
            'numberTV'=>"2",
            'cradle'=>false,
            'state'=>"Disponible"
        ]);
        DB::table('rooms')->insert([
            'name'=>'B10',
            'price'=>"200",
            'type'=>"Small",
            'numberBeds'=>'2',
            'numberBathroom'=>"1",
            'numberTV'=>"1",
            'cradle'=>false,
            'state'=>"Disponible"
        ]);
    }
}
