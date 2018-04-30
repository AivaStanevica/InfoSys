<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('p@55W0rd'),
            'role_id'=>'1',
            ],
            [
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('p@55W0rd'),
            'role_id'=>'2',
            ],
            [
            'name' => 'user2',
            'email' => 'user2@user.com',
            'password' => bcrypt('p@55W0rd'),
            'role_id'=>'2',
            ]
        ]);
    }
}
