<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema'
        ]);  
        Permission::create([
            'name' => 'Ver detalles de usuarios',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema'
        ]);  
        Permission::create([
            'name' => 'Edición usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario del sistema'
        ]);  
        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema'
        ]);

        //Roles
        Permission::create([
            'name' => 'Navegar rproductosoles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los rol del sistema'
        ]);  
        Permission::create([
            'name' => 'Ver detalles de rol',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema'
        ]); 
        Permission::create([
            'name' => 'Creación de roles',
            'slug' => 'roles.create',
            'description' => 'Crear rol del sistema'
        ]);  
        Permission::create([
            'name' => 'Edición rol',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol del sistema'
        ]);  
        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema'
        ]);

        //Roles
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'productos.index',
            'description' => 'Lista y navega todos los rol del sistema'
        ]);  
        Permission::create([
            'name' => 'Ver detalles de producto',
            'slug' => 'productos.show',
            'description' => 'Ver en detalle cada rol del sistema'
        ]); 
        Permission::create([
            'name' => 'Creación de productos',
            'slug' => 'productos.create',
            'description' => 'Crear producto del sistema'
        ]);  
        Permission::create([
            'name' => 'Edición productos',
            'slug' => 'productos.edit',
            'description' => 'Editar cualquier dato de un producto del sistema'
        ]);  
        Permission::create([
            'name' => 'Eliminar productos',
            'slug' => 'productos.destroy',
            'description' => 'Eliminar cualquier producto del sistema'
        ]);
    }
}
