<?php

use Illuminate\Database\Seeder;

class FinancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finances')->insert([

                'name' => 'Budžets',
                'description' => 'Test1',
                'sum' => ('300.40'),
        ]);
        DB::table('folders')->insert([
            'name' => 'Finanses',
            'description' => 'Test1',
        ]);
        DB::table('uploads')->insert([
            'name' => 'budžets2018',
            'folder_id'=>'1',
            'description' => 'Test1',
        ]);
        DB::table('storages')->insert([
            'name' => 'MT',
        ]);
    }
}
