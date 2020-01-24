<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            'name' => 'administrador',
            'email' => 'mail@mail.com',
            'password' => Hash::make('123456'),
        ]);

        $role = Role::where('name','Admin')->first();

        $user->roles()->attach($role);
    }
}
