<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Company::class)->create([
            'name' 			=> 'Dirección de Transferencia, Emprendimiento e Innovación',
            'logo' 			=> 'DTI',
            'description'	=> 'La Dirección de Transferencia e Innovación (DTI) es un órgano dependiente del Vicerrectorado de Investigación, encargado de promover y gestionar relaciones e interacciones entre la Universidad y su entorno, particularmente del sector empresarial, en el área de investigación e innovación (I+D+I) tecnológica encargado de la gestión administrativa de la investigación, desarrollo e innovación en la UNHEVAL y de promover y gestionar relaciones e interacciones entre la UNHEVAL, y su entorno, particularmente, el sector empresarial, en el área de la investigación e innovación tecnológica. Específicamente está encargada de transferir los resultados de los trabajos de investigación y prestaciones de servicios con entidades públicas y privadas; organizar información para empresas; publicaciones; proteger la propiedad intelectual y el registro de patentes.',
            'address' 		=> 'Av. Universitaría 601 - 607 - Huánuco - Pillco Marca - Cayhuayna',
            'phone' 		=> '968547896',
            'email' 		=> 'dtiunheval@gmail.com',
            'twitter' 		=> '',
            'facebook' 		=> 'https://www.facebook.com/profile.php?id=100015127214367',
            'gmail' 		=> 'dtiunheval@gmail.com',
            'instagram' 	=> '',
            'url' 			=> '',
            'urlintranet'   => '',
        ]);
    }
}
