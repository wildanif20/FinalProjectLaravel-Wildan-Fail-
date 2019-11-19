<?php

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role_admin = [
        //     'slug' => 'admin',
        //     'name' => 'admin',
        //     'permissions' => [
        //         'admin' => true
        //     ],
        // ];

        // Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();

        // $adminrole = Sentinel::findRoleByName('admin');
        
        // $user_admin = ["first_name" => "M", "last_name" => "Admin", "email" => "madmin@mail.com", "password" => "12345678"];

        // $adminuser = Sentinel::registerAndActivate($user_admin);

        // $adminuser->roles()->attach($adminrole);

        $role_pelamar = [
            'slug' => 'pelamar',
            'name' => 'pelamar',
            'permissions' => [
                'users' => true,
            ]
        ];
        Sentinel::getRoleRepository()->createModel()->fill($role_pelamar)->save();
        $pelamarrole = Sentinel::findRoleByName('pelamar');
        $user_pelamar = ['first_name' => 'pelamar1', 'last_name' => 'pelamar', 'email' => 'pelamar@p.com', 'password' => 'qweqweqwe'];
        $pelamar_role = Sentinel::registerAndActivate($user_pelamar);
        $pelamar_role->roles()->attach($pelamarrole);
    }
}
