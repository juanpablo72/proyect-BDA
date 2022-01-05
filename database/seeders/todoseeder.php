<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

//laravel permisos

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ROLE DE LARAVEL PERMISION
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'user']);

        //permisos
        $permission = Permission::create(['name' => 'admin.index'])->assignRole($role1);



/*

        $useradmin-User::create([
            'name'->'admin',
            'email'->'admin@sistem.liceo',
            'password'->Hash::make('admin1970'),
            'fullacess'->'yes',
            'codigo'->'adm',
        ]);

        $user-User::create([
            'name'->'user',
            'email'->'juanpablotach72@gmail.com',
            'password'->Hash::make('juanpablo'),
            'fullacess'->'no',
            'codigo'->'user',
        ]);
        */
    }
}
