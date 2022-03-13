<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Penjualan";
        $adminRole->save();

        //membuat the database seed.
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member Penjualan";
        $memberRole->save();

        $userAdmin = new User;
        $userAdmin->name = "Admin Pkl";
        $userAdmin->email = "admin@gmail.com";
        $userAdmin->password = bcrypt("a");
        $userAdmin->save();
        $userAdmin->attachRole($adminRole);

        $userMember = new User;
        $userMember->name = "Member Use";
        $userMember->email = "member@gmail.com";
        $userMember->password = bcrypt("b");
        $userMember->save();
        $userMember->attachRole($memberRole);

    }
}
