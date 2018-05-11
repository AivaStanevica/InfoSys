<?php

use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studies')->insert(
            [
                'study_program' =>'Programmēšana un datortīklu administrēšana','Datorzinātnes Bakalaura','Datorzinātnes Maģistra','Datorzinātnes Doktora'
            ]);
    }
}
