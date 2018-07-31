<?php

use Illuminate\Database\Seeder;

class UnitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Unity::class)->create([
            'name'			=> 'Patentes, Propiedad Intelectual y Publicaciones',
            'description'	=> 'La Unidad de Patentes, Propiedad Intelectual y Publicaciones, es la encargada de brindar servicios de asesoría integral con miras a la protección, promoción y difusión de las creaciones intelectuales desarrollados por los miembros de la comunidad universitaria.',
            'file' 		   => 'https://lorempixel.com/768/450/?56925',
            // 'email'			=> 'asparram@hotmail.com',
            'email'         => 'alexander-310@hotmail.com',
            'icon'			=> 'ion-ios-list-outline',
        ]);
        factory(App\Unity::class)->create([
            'name'          => 'Oferta Tecnológica',
            'description'   => 'La Unidad de Oferta Tecnológica es la encargada de identificar, organizar y transferir conocimiento producido como resultado de las investigaciones e innovación tecnológica a empresas y la sociedad. Brinda asesoramiento al sector público y privado en temas de su competencia.',
            'file'         => 'https://lorempixel.com/768/450/?56952',
            // 'email'          => 'robinfernando@outlook.com',
            'email'         => 'alexander-310@hotmail.com',
            'icon'          => 'ion-ios-speedometer-outline',
        ]);
        factory(App\Unity::class)->create([
            'name'			=> 'Emprendimiento e Incubadora de Empresas',
            'description'	=> 'La Unidad de Emprendimiento e Incubadora de Empresas, promueve la iniciativa de los estudiantes para la creación de pequeñas y micro empresas de propiedad de los estudiantes, brindando asesoría o facilidades en el uso de los equipos e instalaciones de la institución.',
            'file' 	    	=> 'https://lorempixel.com/768/450/?56956',
            // 'email'			=> 'oeie.vri@unheval.edu.pe',
            'email'         => 'alexander-310@hotmail.com',
            'icon'			=> 'ion-ios-eye-outline',
        ]);
    }
}
