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
    		'name' 		=> 'Administrador',
    		'slug' 		=> 'administrador',
            'description' => 'Acceso a todas las opciones',
    		'special' 	=> 'all-access'
    	]);

        factory(User::class)->create([
            'name' => 'DTI Web Administrador',
            'email' => 'dtiunheval@gmail.com',
            'password' => bcrypt('TransFerencia2018'),
        ]);

        factory(User::class)->create([
            'name' => 'Alexander E. G.',
            'email' => 'a@espinoza.com',
            'password' => bcrypt('123123'),
        ]);
    }
}
