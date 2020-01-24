<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Role::firstOrCreate([
            'name' =>'Admin',
            'label' =>'Acesso total ao sistema'
        ]);

        $p2 = Role::firstOrCreate([
            'name' =>'Gerente',
            'label' =>'Gerenciamento do sistema'
        ]);

        $p3 = Role::firstOrCreate([
            'name' =>'Usuario',
            'label' =>'Acesso ao site como usuário'
        ]);

        $role = Role::where('name','Admin')->first();
        $permissions = Permission::all();

        foreach ($permissions as $permission) {
            $role->permissions()->attach($permission);
        }


    }
}
