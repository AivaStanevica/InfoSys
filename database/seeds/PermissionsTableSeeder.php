<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'login',
                'group'=> 'user',
                'display_name' => 'Autentifikācija',
                'description'=>'Lietotājam ir tiesības autentificēties sistēmā',
            ],
            [
                'name' => 'invite',
                'group'=> 'user',
                'display_name' => 'Reģistrācijas aicinājuma nosūtīšana',
                'description'=>'Lietotājam ir tiesības nereģistrētiem lietotājiem nosūtīt uzaicinājumu',
            ],
            [
                'name' => 'show_profile',
                'group'=> 'user',
                'display_name' => 'Skatīt profilu',
                'description'=>'Lietotājam ir tiesības',
            ],
            [
                'name' => 'crud_profile',
                'group'=> 'user',
                'display_name' => 'Profila aizpildīšana, rediģēšana un dzēšana',
                'description'=>'Lietotājam ir tiesības',
            ],
            [
                'name' => 'change_password',
                'group'=> 'user',
                'display_name' => 'Paroles maiņa',
                'description'=>'Lietotājam ir tiesības',
            ],
            [
                'name' => 'new_role',
                'group'=> 'user',
                'display_name' => 'Jaunas lietotāju lomas izveide',
                'description'=>'Lietotājam ir tiesības',
            ],
            [
                'name' => 'show_role',
                'group'=> 'user',
                'display_name' => 'Skatīt lietotāju lomas',
                'description'=>'Lietotājam ir tiesības',
            ],
            [
                'name' => 'show_finance_entry',
                'group'=> 'finance',
                'display_name' => 'Skatīt finansiālos ierakstus',
                'description'=>'Naudas ierakstu',
            ],
            [
                'name' => 'crud_finance_entry',
                'group'=> 'finance',
                'display_name' => 'Rediģēt finansiālos ierakstus',
                'description'=>'Naudas ierakstu',
            ],
            [
                'name' => 'all_finance_entries',
                'group'=> 'finance',
                'display_name' => 'Skatīt visus finansiālos ierakstus',
                'description'=>'Ieraksti',
            ]
        ]);
    }
}
