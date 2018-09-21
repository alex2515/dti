<?php

namespace Tests\Feature;

use App\Tag;
use App\User;
use Tests\TestCase;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagModuleTest extends TestCase
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
    public function it_shows_the_tags_list() // Index
    {
        // $this->withoutExceptionHandling();
        $this->login();
        factory(Tag::class)->create(['name' => 'Etiqueta 1']);
        $this->get('tags')
            ->assertStatus(200)
            ->assertSee('Lista de Etiquetas')
            ->assertSee('Etiqueta 1');
    }

    /** @test */
    function it_displays_the_tags_details() // Show
    {
        $this->login();
        $tag = factory(Tag::class)->create(['name' => 'Etiqueta 1']);
        $this->get("/tags/{$tag->id}") // categoria/2
            ->assertStatus(200)
            ->assertSee('Etiqueta 1');
    }

    /** @test */
    function it_loads_the_new_tags_page() // Create
    {
        $this->login();
        $this->get('/tags/create')
            ->assertStatus(200)
            ->assertSee('Agregar nueva entrada');
    }

    /** @test */
    function it_creates_a_new_tag() // Store
    {
        $this->login();
        $this->withoutExceptionHandling();

        $this->post('/tags/store', [
            'name' => 'Etiqueta 1',
            'slug' => str_slug('Etiqueta 1'),
            ])->assertRedirect('/tags/5/edit');
        $this->assertDatabaseHas('tags',[
            'name' => 'Etiqueta 1',
            'slug' => str_slug('Etiqueta 1'),
        ]);
    }

    /** @test */
    function it_loads_the_edit_tag_page() // Edit
    {
        $this->login();
        $this->withoutExceptionHandling();

        $tag = factory(Tag::class)->create();

        $this->get("/tags/{$tag->id}/edit") // tag/1/edit
            ->assertStatus(200)
            ->assertViewIs('admin.tags.edit')
            ->assertSee('Agregar nueva entrada')
            ->assertViewHas('tag', 
                        function ($viewTag) use ($tag) { 
                            return $viewTag->id === $tag->id;
                        });
    }

    /** @test */
    function it_updates_a_tag() // Update
    {
        $this->login();
        $tag = factory(Tag::class)->create();

        $this->withoutExceptionHandling();

        $this->put("/tags/{$tag->id}", [
            'name' => 'Etiqueta 1',
            'slug' => str_slug('Etiqueta 1')
        ])->assertRedirect("/tags/{$tag->id}/edit");

        $this->assertDatabaseHas('tags',[
            'name' => 'Etiqueta 1',
            'slug' => str_slug('Etiqueta 1')
        ]);
    }

    /** @test */
    function it_deletes_a_tag() // Delete
    {
        $this->login();
        $this->withoutExceptionHandling();

        $tag = factory(Tag::class)->create();

        $this->delete("tags/{$tag->id}")
            ->assertRedirect('/');

        $this->assertDatabaseMissing('tags', [
           'id' => $tag->id
        ]);
    }
}
