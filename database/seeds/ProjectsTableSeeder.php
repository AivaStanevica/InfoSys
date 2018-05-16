<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([

            'name' => 'Sējiens 2018',
            'description' => 'Test2',
            'project_money' => '6400.00',
            'responsible_id' => '2',
        ]);
    }
}
