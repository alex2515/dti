<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TestimoniesTableSeeder::class);
        $this->call(UnitiesTableSeeder::class);
        // $this->call(PresentationsTableSeeder::class);
    }
}
