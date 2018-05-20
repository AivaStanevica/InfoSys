<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'active'=>'1',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'user2',
                'email' => 'user2@user.com',
                'password' => bcrypt('p@55W0rd'),
                'role_id'=>'2',
                'active'=>'0',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'user3',
                'email' => 'user3@user.com',
                'password' => bcrypt('p@55W0rd'),
                'role_id'=>'2',
                'active'=>'0',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
            ]
        ]);

        DB::table('users')->insert(
            [
                'name' => 'Andris',
                'surname'=>'Liepiņš',
                'email' => 'andris.liepins@test.com',
                'password' => bcrypt('p@55W0rd'),
                'role_id'=>'2',
                'direction'=>'1',
                'phone'=>'27943580',
                'student_id'=>'al56731',
                'course'=>'2',
                'study_program'=>'2',
                'email2'=>'andris.liepins@datoriki.lv',
                'active'=>'1',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
            ]
        );
    }
}
