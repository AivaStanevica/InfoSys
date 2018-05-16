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
    }
}
