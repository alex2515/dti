<?php

use App\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class, 29)->create();

    	Role::create([
    		'name' 		=> 'Admin',
    		'slug' 		=> 'admin',
            'description' => 'Acceso a todas las opciones',
    		'special' 	=> 'all-access'
    	]);

        factory(User::class)->create([
            'name' => 'Alexander Espinoza G.',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
