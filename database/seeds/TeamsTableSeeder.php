<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Team::Class)->create([
            'name' 			=> 'Dr. Nerida Pastrana',
            'occupation' 	=> 'Directora de transferencia e innovación',
            'file' 		=> 'https://lorempixel.com/400/400/?56952',
            'twitter' 		=> '#',
            'facebook' 		=> '#',
            'gmail' 		=> '#',
            'linkedin' 		=> '#',
    	]);

    	factory(App\Team::Class)->create([
            'name' 			=> 'Lic Abraham Parra Moreno',
            'occupation' 	=> 'Jefe de propiedad intelectual',
            'file' 		=> 'https://lorempixel.com/400/400/?56953',
            'twitter'       => '#',
            'facebook'      => '#',
            'gmail'         => '#',
            'linkedin'      => '#',
    	]);

    	factory(App\Team::Class)->create([
            'name' 			=> 'Ing. Robin Herrera Calero',
            'occupation' 	=> 'Especialista en oferta tecnológica',
            'file' 		=> 'https://lorempixel.com/400/400/?56954',
            'twitter'       => '#',
            'facebook'      => '#',
            'gmail'         => '#',
            'linkedin'      => '#',
    	]);

    	factory(App\Team::Class)->create([
            'name' 			=> 'Ing. Carlos Ventura Matos',
            'occupation' 	=> 'Especilista en emprendimiento',
            'file' 		=> 'https://lorempixel.com/400/400/?56955',
            'twitter'       => '#',
            'facebook'      => '#',
            'gmail'         => '#',
            'linkedin'      => '#',
    	]);

    	factory(App\Team::Class)->create([
            'name' 			=> 'Dr. Linver Luciano Villar',
            'occupation' 	=> 'Jefe de Oferta Técnologica',
            'file'          => 'https://lorempixel.com/400/400/?56956',
            'twitter'       => '#',
            'facebook'      => '#',
            'gmail'         => '#',
            'linkedin'      => '#',
    	]);

    	factory(App\Team::Class)->create([
            'name' 			=> 'Betsy Quispe Osorio',
            'occupation' 	=> 'Secretaria',
            'file'          => 'https://lorempixel.com/400/400/?56958',
            'twitter'       => '#',
            'facebook'      => '#',
            'gmail'         => '#',
            'linkedin'      => '#',
    	]);

    	factory(App\Team::Class)->create([
            'name' 			=> 'Dr. Amparo Espinoza Chavez',
            'occupation' 	=> 'Jefe de Emprendimiento',
            'file'          => 'https://lorempixel.com/400/400/?56962',
            'twitter'       => '#',
            'facebook'      => '#',
            'gmail'         => '#',
            'linkedin'      => '#',
    	]);


    }
}
