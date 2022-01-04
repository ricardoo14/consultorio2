<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Empleado']);
        $role2 = Role::create(['name'=>'Medico']);
        $role3 = Role::create(['name'=>'Paciente']);

        Permission::create(['name'=>'Paciente'])->assignRole($role3);
        Permission::create(['name'=>'Medico'])->assignRole($role2);
        Permission::create(['name'=>'Empleado'])->assignRole($role1);
    }
        
}
