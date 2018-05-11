<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $login = Permission::where('name','login')->first();
        $invite = Permission::where('name','invite')->first();
        $showProfile = Permission::where('name','show_profile')->first();
        $showFinanceEnrty= Permission::where('name', 'show_finance_entry')->first();

        $admin = new Role;
        $admin->name = 'administrators';
        $admin->description = 'Visuvarens. Tiek un māk visu';
        $admin->created_at = date("Y-m-d H:i:s");
        $admin->updated_at = date("Y-m-d H:i:s");
        $admin->save();

        $admin->permissions()->attach($login);
        $admin->permissions()->attach($invite);
        $admin->permissions()->attach($showProfile);
        $admin->permissions()->attach($showFinanceEnrty);

        $user = new Role();
        $user->name = 'biedrs';
        $user->description ='Vienkāršs biedrs';
        $user->created_at=date("Y-m-d H:i:s");
        $user->updated_at=date("Y-m-d H:i:s");
        $user->save();

        $user->permissions()->attach($showProfile);
    }
}
