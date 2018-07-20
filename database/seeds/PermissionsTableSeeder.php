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
        	'name' => 'Navegar USUARIOS',
        	'slug' => 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de USUARIOS',
        	'slug' => 'users.show',
        	'description' => 'Ver en detalle cada usuario del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de USUARIOS',
        	'slug' => 'users.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar USUARIOS',
        	'slug' => 'users.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema'
        ]);

        //Roles
        Permission::create([
        	'name' => 'Navegar ROLES',
        	'slug' => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de ROLES',
        	'slug' => 'roles.show',
        	'description' => 'Ver en detalle cada rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de ROLES',
        	'slug' => 'roles.create',
        	'description' => 'Editar cualquier dato de un rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de ROLES',
        	'slug' => 'roles.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar ROLES',
        	'slug' => 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema'
        ]);

        //Products
        Permission::create([
        	'name' => 'Navegar PRODUCTOS',
        	'slug' => 'products.index',
        	'description' => 'Lista y navega todos los productos del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de PRODUCTOS',
        	'slug' => 'products.show',
        	'description' => 'Ver en detalle cada producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de PRODUCTOS',
        	'slug' => 'products.create',
        	'description' => 'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de PRODUCTOS',
        	'slug' => 'products.edit',
        	'description' => 'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar PRODUCTOS',
        	'slug' => 'products.destroy',
        	'description' => 'Eliminar cualquier producto del sistema'
        ]);

        //Categories
        Permission::create([
            'name' => 'Navegar CATEGORIAS',
            'slug' => 'categories.index',
            'description' => 'Lista y navega todos los categorias del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de CATEGORIAS',
            'slug' => 'categories.show',
            'description' => 'Ver en detalle cada categoria del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de CATEGORIAS',
            'slug' => 'categories.create',
            'description' => 'Editar cualquier dato de un categoria del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de CATEGORIAS',
            'slug' => 'categories.edit',
            'description' => 'Editar cualquier dato de un categoria del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar CATEGORIAS',
            'slug' => 'categories.destroy',
            'description' => 'Eliminar cualquier categoria del sistema'
        ]);

        //Tags
        Permission::create([
            'name' => 'Navegar ETIQUETAS',
            'slug' => 'tags.index',
            'description' => 'Lista y navega todos los etiquetas del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de ETIQUETAS',
            'slug' => 'tags.show',
            'description' => 'Ver en detalle cada etiqueta del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de ETIQUETAS',
            'slug' => 'tags.create',
            'description' => 'Editar cualquier dato de un etiqueta del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de ETIQUETAS',
            'slug' => 'tags.edit',
            'description' => 'Editar cualquier dato de un etiqueta del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar ETIQUETAS',
            'slug' => 'tags.destroy',
            'description' => 'Eliminar cualquier etiqueta del sistema'
        ]);

        //Posts
        Permission::create([
            'name' => 'Navegar EVENTOS',
            'slug' => 'posts.index',
            'description' => 'Lista y navega todos los posts del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de EVENTOS',
            'slug' => 'posts.show',
            'description' => 'Ver en detalle cada post del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de EVENTOS',
            'slug' => 'posts.create',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de EVENTOS',
            'slug' => 'posts.edit',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar EVENTOS',
            'slug' => 'posts.destroy',
            'description' => 'Eliminar cualquier post del sistema'
        ]);

        //Services
        Permission::create([
            'name' => 'Navegar SERVICIOS',
            'slug' => 'services.index',
            'description' => 'Lista y navega todos los services del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de SERVICIOS',
            'slug' => 'services.show',
            'description' => 'Ver en detalle cada SERVICE del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de SERVICIOS',
            'slug' => 'services.create',
            'description' => 'Editar cualquier dato de un SERVICE del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de SERVICIOS',
            'slug' => 'services.edit',
            'description' => 'Editar cualquier dato de un SERVICE del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar SERVICIOS',
            'slug' => 'services.destroy',
            'description' => 'Eliminar cualquier SERVICE del sistema'
        ]);

        //PORTAFOLIO
        Permission::create([
            'name' => 'Navegar PORTAFOLIOS',
            'slug' => 'portfolios.index',
            'description' => 'Lista y navega todos los portfolios del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de PORTAFOLIOS',
            'slug' => 'portfolios.show',
            'description' => 'Ver en detalle cada post del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de PORTAFOLIOS',
            'slug' => 'portfolios.create',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de PORTAFOLIOS',
            'slug' => 'portfolios.edit',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar PORTAFOLIOS',
            'slug' => 'portfolios.destroy',
            'description' => 'Eliminar cualquier post del sistema'
        ]);
    }
}
