<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Rol::where('type','Administrador')->value('id');
        $roleUser = Rol::where('type','User')->value('id');
        User::create([
            'name' => 'Super Admin',
            'email' => 'superAdmin@gmail.com',
            'password' => bcrypt('Admin1234'),
            'rols_id' => $roleAdmin
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('User12345'),
            'rols_id' => $roleUser
        ]);
    }
}
