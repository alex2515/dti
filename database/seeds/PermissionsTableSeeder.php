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
        	'description' => 'Lista y navega todos los USUARIOS del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de USUARIOS',
        	'slug' => 'users.show',
        	'description' => 'Ver en detalle cada USUARIO del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de USUARIOS',
        	'slug' => 'users.edit',
        	'description' => 'Editar cualquier dato de un USUARIO del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar USUARIOS',
        	'slug' => 'users.destroy',
        	'description' => 'Eliminar cualquier USUARIO del sistema'
        ]);

        //Roles
        Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de rol',
        	'slug' => 'roles.show',
        	'description' => 'Ver en detalle cada rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de roles',
        	'slug' => 'roles.create',
        	'description' => 'Editar cualquier dato de un rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de roles',
        	'slug' => 'roles.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar rol',
        	'slug' => 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema'
        ]);

        //Products
        Permission::create([
        	'name' => 'Navegar productos',
        	'slug' => 'products.index',
        	'description' => 'Lista y navega todos los productos del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de producto',
        	'slug' => 'products.show',
        	'description' => 'Ver en detalle cada producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de productos',
        	'slug' => 'products.create',
        	'description' => 'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de productos',
        	'slug' => 'products.edit',
        	'description' => 'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar producto',
        	'slug' => 'products.destroy',
        	'description' => 'Eliminar cualquier producto del sistema'
        ]);

        //Categories
        Permission::create([
            'name' => 'Navegar categorias',
            'slug' => 'categories.index',
            'description' => 'Lista y navega todos los categorias del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de categoria',
            'slug' => 'categories.show',
            'description' => 'Ver en detalle cada categoria del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de categorias',
            'slug' => 'categories.create',
            'description' => 'Editar cualquier dato de un categoria del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de categorias',
            'slug' => 'categories.edit',
            'description' => 'Editar cualquier dato de un categoria del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar categoria',
            'slug' => 'categories.destroy',
            'description' => 'Eliminar cualquier categoria del sistema'
        ]);

        //Tags
        Permission::create([
            'name' => 'Navegar etiquetas',
            'slug' => 'tags.index',
            'description' => 'Lista y navega todos los etiquetas del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de etiqueta',
            'slug' => 'tags.show',
            'description' => 'Ver en detalle cada etiqueta del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de etiquetas',
            'slug' => 'tags.create',
            'description' => 'Editar cualquier dato de un etiqueta del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de etiquetas',
            'slug' => 'tags.edit',
            'description' => 'Editar cualquier dato de un etiqueta del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar etiqueta',
            'slug' => 'tags.destroy',
            'description' => 'Eliminar cualquier etiqueta del sistema'
        ]);

        //Posts
        Permission::create([
            'name' => 'Navegar posts',
            'slug' => 'posts.index',
            'description' => 'Lista y navega todos los posts del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de post',
            'slug' => 'posts.show',
            'description' => 'Ver en detalle cada post del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de posts',
            'slug' => 'posts.create',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de posts',
            'slug' => 'posts.edit',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar posts',
            'slug' => 'posts.destroy',
            'description' => 'Eliminar cualquier post del sistema'
        ]);

        //Services
        Permission::create([
            'name' => 'Navegar services',
            'slug' => 'services.index',
            'description' => 'Lista y navega todos los services del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de SERVICE',
            'slug' => 'services.show',
            'description' => 'Ver en detalle cada SERVICE del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de services',
            'slug' => 'services.create',
            'description' => 'Editar cualquier dato de un SERVICE del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de services',
            'slug' => 'services.edit',
            'description' => 'Editar cualquier dato de un SERVICE del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar services',
            'slug' => 'services.destroy',
            'description' => 'Eliminar cualquier SERVICE del sistema'
        ]);

        //PORTAFOLIO
        Permission::create([
            'name' => 'Navegar portfolios',
            'slug' => 'portfolios.index',
            'description' => 'Lista y navega todos los portfolios del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de post',
            'slug' => 'portfolios.show',
            'description' => 'Ver en detalle cada post del sistema'
        ]);
        Permission::create([
            'name' => 'Creación de portfolios',
            'slug' => 'portfolios.create',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Edición de portfolios',
            'slug' => 'portfolios.edit',
            'description' => 'Editar cualquier dato de un post del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar portfolios',
            'slug' => 'portfolios.destroy',
            'description' => 'Eliminar cualquier post del sistema'
        ]);
    }
}
