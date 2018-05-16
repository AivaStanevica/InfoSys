<?php

use Illuminate\Database\Seeder;
use App\Direction;

class DirectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directions=['Akadēmiskā','Komunikācijas','Kultūras un sporta','Valde'];

        foreach ($directions as $direction)
            Direction::create(['direction'=>$direction]);
    }
}
