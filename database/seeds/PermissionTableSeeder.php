<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permission::firstOrCreate([
            'name' =>'usuario-view',
            'label' =>'Acesso a lista de Usuários'
        ]);
        $usuarios2 = Permission::firstOrCreate([
            'name' =>'usuario-create',
            'label' =>'Adicionar Usuários'
        ]);
        $usuarios2 = Permission::firstOrCreate([
            'name' =>'usuario-edit',
            'label' =>'Editar Usuários'
        ]);
        $usuarios3 = Permission::firstOrCreate([
            'name' =>'usuario-delete',
            'label' =>'Deletar Usuários'
        ]);

        $papeis1 = Permission::firstOrCreate([
            'name' =>'papel-view',
            'label' =>'Listar Papéis'
        ]);
        $papeis2 = Permission::firstOrCreate([
            'name' =>'papel-create',
            'label' =>'Adicionar Papéis'
        ]);
        $papeis3 = Permission::firstOrCreate([
            'name' =>'papel-edit',
            'label' =>'Editar Papéis'
        ]);

        $papeis4 = Permission::firstOrCreate([
            'name' =>'papel-delete',
            'label' =>'Deletar Papéis'
        ]);

    }
}
