<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use KarlosCabral\Role;
use KarlosCabral\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new Role();
        $superadmin->name = 'Super Admin';
        $superadmin->display_name = 'Project Super Admin'; // optional
        $superadmin->description = 'User is the Super Admin of the this Project He will only able to add Admins'; // optional
        $superadmin->save();

        $user = new User();
        $user->name = 'Karlos Cabral';
        $user->email = 'contato@karloscabral.com.br';
        $user->password = Hash::make('@A123mduar');
        $user->save();
        $user->attachRole($superadmin);

        $admin = new Role();
        $admin->name = 'Admin';
        $admin->display_name = 'Project Admin'; // optional
        $admin->description = 'User is the Admin of the this Project He will only able to add Users'; // optional
        $admin->save();

        $staff = new Role();
        $staff->name = 'Staff';
        $staff->display_name = 'Project Staff'; // optional
        $staff->description = 'User is the Staff of the this Project He will manage tasks'; // optional
        $staff->save();



        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('Secret');
        $user->save();
        $user->attachRole($admin);
    }
}
