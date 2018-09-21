<?php

namespace Tests\Feature;

use App\User;
use App\Service;
use App\Category;
use Tests\TestCase;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceModuleTest extends TestCase
{
    use RefreshDatabase;

    public function login()
    {
        $user = factory(User::class)->create([
            'name' => 'Alexander E. G.',
            'email' => 'a@espinoza.com',
            'password' => bcrypt('123123'),
        ]);
        $permission = Permission::all();
        $role = Role::create([
            'name' 		=> 'Administrador',
            'slug' 		=> 'administrador',
            'special' 	=> 'all-access'
        ]);

        $role->permissions()->sync($permission);
        $user->roles()->sync($role);
        $this->actingAs($user);
        return $user;
    }

    /**  @test */
    public function it_shows_the_services_list() // Index
    {
        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $service = factory(Service::class)->create([
            'user_id' => $this->login()->id,
            'category_id' => $category->id,
            'name' => 'Servicio 1'
        ]);
        $this->get('services')
            ->assertStatus(200)
            ->assertSee('Lista de Servicios')
            ->assertSee('Servicio 1');
    }

    /** @test */
    function it_displays_the_services_details() // Show
    {
        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $service = factory(Service::class)->create([
            'user_id' => $this->login()->id,
            'category_id' => $category->id,
            'name' => 'Servicio 1'
        ]);
        $this->get("/services/{$service->id}") // servicio/2
            ->assertStatus(200)
            ->assertSee('Servicio 1');
    }

    /** @test */
    function it_loads_the_new_services_page() // Create
    {
        $this->login();
        $this->get('/services/create')
            ->assertStatus(200)
            ->assertSee('Lista de Servicios');
    }

    /** @test */
    function it_creates_a_new_service() // Store
    {
        $this->withoutExceptionHandling();
        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $this->post('/services/store', [
            'user_id' => $this->login()->id,
            'category_id' => $category->id, 
            'name' => 'Servicio 1',
            'excerpt' => 'Servicioss',
            'slug' => str_slug('Servicio 1'),
            'filepdf' => 'www.google.com/miarchivo.pdf',
            ])->assertRedirect('/services/3/edit');
        $this->assertDatabaseHas('services',[
            'name' => 'Servicio 1',
            'excerpt' => 'Servicioss',
            'slug' => str_slug('Servicio 1'),
            'filepdf' => 'www.google.com/miarchivo.pdf',
        ]);
    }

    /** @test */
    function it_loads_the_edit_service_page() // Edit
    {
        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $service = factory(Service::class)->create([
            'user_id' => $this->login()->id,
            'category_id' => $category->id,
            'name' => 'Servicio 1'
        ]);

        $this->get("/services/{$service->id}/edit") // service/1/edit
            ->assertStatus(200)
            ->assertViewIs('admin.services.edit')
            ->assertSee('Lista de Servicios')
            ->assertViewHas('service', 
                        function ($viewService) use ($service) { 
                            return $viewService->id === $service->id;
                        });
    }

    /** @test */
    function it_updates_a_service() // Update
    {
        $user = factory(User::class)->create([
            'name' => 'Alexander E. G.',
            'email' => 'a@espinoza.com',
            'password' => bcrypt('123123'),
        ]);
        $permission = Permission::all();
        $role = Role::create([
            'name' 		=> 'Administrador',
            'slug' 		=> 'administrador',
            'special' 	=> 'all-access'
        ]);

        $role->permissions()->sync($permission);
        $user->roles()->sync($role);
        $this->actingAs($user);

        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $service = factory(Service::class)->create([
            'user_id'       => $user->id,
            'category_id'   => $category->id,
            ]);
        $this->put("/services/{$service->id}", [
            'user_id' => $user->id,
            'category_id' => $category->id, 
            'name' => 'Servicio 1',
            'excerpt' => 'Servicioss',
            'slug' => str_slug('Servicio 1'),
            'filepdf' => 'www.google.com/miarchivo.pdf',
        ])->assertRedirect("/services/{$service->id}/edit");

        $this->assertDatabaseHas('services',[
            'user_id' => $user->id,
            'category_id' => $category->id, 
            'name' => 'Servicio 1',
            'excerpt' => 'Servicioss',
            'slug' => str_slug('Servicio 1'),
            'filepdf' => 'www.google.com/miarchivo.pdf',
        ]);
    }

    /** @test */
    function it_deletes_a_service() // Delete
    {
        $this->withoutExceptionHandling();

        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $service = factory(Service::class)->create([
            'user_id' => $this->login()->id,
            'category_id' => $category->id,
            'name' => 'Servicio 1'
        ]);
        $this->delete("services/{$service->id}")
            ->assertRedirect('/');

        $this->assertDatabaseMissing('services', [
           'id' => $service->id
        ]);
    }

}
