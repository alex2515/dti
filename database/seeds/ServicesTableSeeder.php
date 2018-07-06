<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Service::class, 300)->create()->each(function(App\Post $service){
        //     $service->category()->attach([
        //         rand(1,5),
        //         rand(6,14),
        //         rand(15,20),
        //     ]);
        // });
        factory(App\Service::class,50)->create();
    }
}
