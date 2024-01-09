<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Blogger']);

        Permission::create(['name'=>'dashboard',
                            'description'=>'Ver el Dasboard'])->syncRoles([$role1,$role2]);

        
        Permission::create(['name'=>'users.index',
                            'description'=>'Ver listado  de Usuarios'])->assignRole([$role1]);
        Permission::create(['name'=>'users.edit',
                            'description'=>'Asignar Un Rol'])->assignRole([$role1]);
        Permission::create(['name'=>'users.update',
                            'description'=>'Actualizar Un Rol'])->assignRole([$role1]);


        Permission::create(['name'=>'invernaderos.index',
                            'description'=>'Ver listado de invernaderos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'invernaderos.show',
                            'description'=>'Ver Vista de Invernaderos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'invernaderos.create',
                            'description'=>'Crear un invenadero'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'invernaderos.edit',
                            'description'=>'Editar un invernadero'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'invernaderos.destroy',
                            'description'=>'Eliminar un invernadero'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'camas.index',
                            'description'=>'Ver listado de camas'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'camas.show',
                            'description'=>'Ver Vista de Camas'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'camas.create',
                            'description'=>'Crear Camas'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'camas.edit',
                            'description'=>'Editar camas'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'camas.destroy',
                            'description'=>'Eliminar camas'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'sensores.index',
                            'description'=>'Listado de Sensores'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'sensores.show',
                            'description'=>'Ver Vista de Sensores'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'sensores.create',
                            'description'=>'Crear un sensor'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'sensores.edit',
                            'description'=>'Editar un sensor'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'sensores.destroy',
                            'description'=>'Eliminar un sensor'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'roles.index',
                            'description'=>'Ver listado de invernaderos'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.show',
                            'description'=>'Ver Vista de Invernaderos'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.create',
                            'description'=>'Crear un invenadero'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.edit',
                            'description'=>'Editar un invernadero'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.destroy',
                            'description'=>'Eliminar un invernadero'])->syncRoles([$role1]);
    }
}
