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
        // Users
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las usuarios',
            'slug' => 'users.show',
            'description' => 'Ver detalles de cada usuario en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario en el sistema'
        ]);

        // Roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear roles',
            'slug' => 'roles.create',
            'description' => 'Crear nuevos roles en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las roles',
            'slug' => 'roles.show',
            'description' => 'Ver detalles de cada rol en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar roles',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol en el sistema'
        ]);

        // Categories
        Permission::create([
            'name' => 'Navegar categorías',
            'slug' => 'categories.index',
            'description' => 'Lista y navega todas las categorías en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear categorías',
            'slug' => 'categories.create',
            'description' => 'Crear nuevas categorías en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las categorías',
            'slug' => 'categories.show',
            'description' => 'Ver detalles de cada categoría en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar categorías',
            'slug' => 'categories.edit',
            'description' => 'Editar cualquier dato de una categoría en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar categorías',
            'slug' => 'categories.destroy',
            'description' => 'Eliminar cualquier categoría en el sistema'
        ]);

        // Tags
        Permission::create([
            'name' => 'Navegar etiquetas',
            'slug' => 'tags.index',
            'description' => 'Lista y navega todas las etiquetas en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear etiquetas',
            'slug' => 'tags.create',
            'description' => 'Crear nuevas etiquetas en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las etiquetas',
            'slug' => 'tags.show',
            'description' => 'Ver detalles de cada etiqueta en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar etiquetas',
            'slug' => 'tags.edit',
            'description' => 'Editar cualquier dato de una etiqueta en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar etiquetas',
            'slug' => 'tags.destroy',
            'description' => 'Eliminar cualquier etiqueta en el sistema'
        ]);

        // Posts
        Permission::create([
            'name' => 'Navegar eventos',
            'slug' => 'posts.index',
            'description' => 'Lista y navega todos los eventos en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear eventos',
            'slug' => 'posts.create',
            'description' => 'Crear nuevos eventos en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las eventos',
            'slug' => 'posts.show',
            'description' => 'Ver detalles de cada evento en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar eventos',
            'slug' => 'posts.edit',
            'description' => 'Editar cualquier dato de un evento en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar eventos',
            'slug' => 'posts.destroy',
            'description' => 'Eliminar cualquier evento en el sistema'
        ]);

        // Services
        Permission::create([
            'name' => 'Navegar servicios',
            'slug' => 'services.index',
            'description' => 'Lista y navega todos los servicios en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear servicios',
            'slug' => 'services.create',
            'description' => 'Crear nuevos servicios en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de los servicios',
            'slug' => 'services.show',
            'description' => 'Ver detalles de cada servicio en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar servicios',
            'slug' => 'services.edit',
            'description' => 'Editar cualquier dato de un servicio en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar servicios',
            'slug' => 'services.destroy',
            'description' => 'Eliminar cualquier servicio en el sistema'
        ]);

        // Portfolios
        Permission::create([
            'name' => 'Navegar portafolios',
            'slug' => 'portfolios.index',
            'description' => 'Lista y navega todos los portafolios en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear portafolios',
            'slug' => 'portfolios.create',
            'description' => 'Crear nuevos portafolios en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de los portafolios',
            'slug' => 'portfolios.show',
            'description' => 'Ver detalles de cada portafolio en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar portafolios',
            'slug' => 'portfolios.edit',
            'description' => 'Editar cualquier dato de un portafolio en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar portafolios',
            'slug' => 'portfolios.destroy',
            'description' => 'Eliminar cualquier portafolio en el sistema'
        ]);

        // Customers
        Permission::create([
            'name' => 'Navegar clientes',
            'slug' => 'customers.index',
            'description' => 'Lista y navega todos los clientes en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear clientes',
            'slug' => 'customers.create',
            'description' => 'Crear nuevos clientes en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de los clientes',
            'slug' => 'customers.show',
            'description' => 'Ver detalles de cada cliente en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar clientes',
            'slug' => 'customers.edit',
            'description' => 'Editar cualquier dato de un cliente en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar clientes',
            'slug' => 'customers.destroy',
            'description' => 'Eliminar cualquier cliente en el sistema'
        ]);

        // Teams
        Permission::create([
            'name' => 'Navegar integrantes',
            'slug' => 'teams.index',
            'description' => 'Lista y navega todos los integrantes en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear integrantes',
            'slug' => 'teams.create',
            'description' => 'Crear nuevos integrantes en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de los integrantes',
            'slug' => 'teams.show',
            'description' => 'Ver detalles de cada integrante en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar integrantes',
            'slug' => 'teams.edit',
            'description' => 'Editar cualquier dato de un integrante en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar integrantes',
            'slug' => 'teams.destroy',
            'description' => 'Eliminar cualquier integrante en el sistema'
        ]);

        // Testimonies
        Permission::create([
            'name' => 'Navegar testimonios',
            'slug' => 'testimonies.index',
            'description' => 'Lista y navega todos los testimonios en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear testimonios',
            'slug' => 'testimonies.create',
            'description' => 'Crear nuevos testimonios en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de los testimonios',
            'slug' => 'testimonies.show',
            'description' => 'Ver detalles de cada testimonio en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar testimonios',
            'slug' => 'testimonies.edit',
            'description' => 'Editar cualquier dato de un testimonio en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar testimonios',
            'slug' => 'testimonies.destroy',
            'description' => 'Eliminar cualquier testimonio en el sistema'
        ]);

        // Unities
        Permission::create([
            'name' => 'Navegar unidades',
            'slug' => 'unities.index',
            'description' => 'Lista y navega todas las unidades en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear unidades',
            'slug' => 'unities.create',
            'description' => 'Crear nuevas unidades en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las unidades',
            'slug' => 'unities.show',
            'description' => 'Ver detalles de cada unidad en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar unidades',
            'slug' => 'unities.edit',
            'description' => 'Editar cualquier dato de una unidad en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar unidades',
            'slug' => 'unities.destroy',
            'description' => 'Eliminar cualquier unidad en el sistema'
        ]);

        // Presentations
        Permission::create([
            'name' => 'Navegar fotos de inicio',
            'slug' => 'presentations.index',
            'description' => 'Lista y navega todas las fotos de inicio en el sistema'
        ]);
        Permission::create([
            'name' => 'Crear fotos de inicio',
            'slug' => 'presentations.create',
            'description' => 'Crear nuevas fotos de inicio en el sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de las fotos de inicio',
            'slug' => 'presentations.show',
            'description' => 'Ver detalles de cada foto de inicio en el sistema'
        ]);
        Permission::create([
            'name' => 'Editar fotos de inicio',
            'slug' => 'presentations.edit',
            'description' => 'Editar cualquier dato de una foto de inicio en el sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar fotos de inicio',
            'slug' => 'presentations.destroy',
            'description' => 'Eliminar cualquier foto de inicio en el sistema'
        ]);
        // Homestead ofrece una máquina virtual completa de Ubuntu con configuración automatizada de Nginx. Homestead es una elección maravillosa si desea un entorno de desarrollo de Linux completamente virtualizado o está en Windows / Linux.

    }
}
