<?php

namespace Tests\Feature;

use App\User;
use App\Category;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryModuleTest extends TestCase
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
            'description' => 'Acceso a todas las opciones',
            'special' 	=> 'all-access'
        ]);

        $role->permissions()->sync($permission);
        $user->roles()->sync($role);
        $this->actingAs($user);
    }

    /**  @test */
    public function it_shows_the_categories_list() // Index
    {
        // $this->withoutExceptionHandling();
        $this->login();
        factory(Category::class)->create(['name' => 'CATI']);
        $this->get('categories')
            ->assertStatus(200)
            ->assertSee('Lista de Categorias')
            ->assertSee('CATI');
    }

    /** @test */
    function it_displays_the_categories_details() // Show
    {
        $this->login();
        $category = factory(Category::class)->create(['name' => 'CATI']);
        $this->get("/categories/{$category->id}") // categoria/2
            ->assertStatus(200)
            ->assertSee('CATI');
    }

    /** @test */
    function it_loads_the_new_categories_page() // Create
    {
        $this->login();
        $this->get('/categories/create')
            ->assertStatus(200)
            ->assertSee('Agregar nueva categoria');
    }

    /** @test */
    function it_creates_a_new_category() // Store
    {
        $this->login();
        $this->withoutExceptionHandling();

        $this->post('/categories/store', [
            'name' => 'CATI',
            'slug' => str_slug('CATI'),
            'type' => 'EVENT',
            'icon' => 'fa fa-plus'
            ])->assertRedirect('/categories/3/edit');
        $this->assertDatabaseHas('categories',[
            'name' => 'CATI',
            'slug' => 'cati',
            'type' => 'EVENT',
            'icon' => 'fa fa-plus'
        ]);
    }

    /** @test */
    function it_loads_the_edit_category_page() // Edit
    {
        $this->login();
        $this->withoutExceptionHandling();

        $category = factory(Category::class)->create();

        $this->get("/categories/{$category->id}/edit") // category/1/edit
            ->assertStatus(200)
            ->assertViewIs('admin.categories.edit')
            ->assertSee('Agregar nueva categoria')
            ->assertViewHas('category', 
                        function ($viewCategory) use ($category) { 
                            return $viewCategory->id === $category->id;
                        });
    }

    /** @test */
    function it_updates_a_category() // Update
    {
        $this->login();
        $category = factory(Category::class)->create();

        $this->withoutExceptionHandling();

        $this->put("/categories/{$category->id}", [
            'name' => 'CATI',
            'slug' => str_slug('CATI'),
            'type' => 'EVENT',
            'icon' => 'fa fa-plus'
        ])->assertRedirect("/categories/{$category->id}/edit");

        $this->assertDatabaseHas('categories',[
            'name' => 'CATI',
            'slug' => str_slug('CATI'),
            'type' => 'EVENT',
            'icon' => 'fa fa-plus'
        ]);
    }

    /** @test */
    function it_deletes_a_category() // Delete
    {
        $this->login();
        $this->withoutExceptionHandling();

        $category = factory(Category::class)->create();

        $this->delete("categories/{$category->id}")
            ->assertRedirect('/');

        $this->assertDatabaseMissing('categories', [
           'id' => $category->id
        ]);
    }

}
