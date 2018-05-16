<?php

use Illuminate\Database\Seeder;
use App\Studies;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $studyPrograms= ['Programmēšana un datortīklu administrēšana','Datorzinātnes Bakalaura','Datorzinātnes Maģistra','Datorzinātnes Doktora'];

        foreach ($studyPrograms as $studyProgram)

        Studies::create(['study_program'=>$studyProgram]);
    }
}
