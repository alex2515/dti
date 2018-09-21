<?php

namespace Tests\Feature;

use App\Tag;
use App\Post;
use App\User;
use App\Category;
use Tests\TestCase;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostModuleTest extends TestCase
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
    public function it_shows_the_eventos_list() // Index
    {
        $category   = factory(Category::class)->create(['name' => 'Categoria 1']);
        $etiqueta   = factory(Tag::class)->create(['name' => 'Etiqueta 1']);
        $post     = factory(Post::class)->create([
            'user_id'       => $this->login()->id,
            'category_id'   => $category->id,
            'name'          => 'Evento 1'
        ]);
        $this->get('posts')
            ->assertStatus(200)
            ->assertSee('Lista de Eventos')
            ->assertSee('Evento 1');
    }

    /** @test */
    function it_displays_the_eventos_details() // Show
    {
        $category   = factory(Category::class)->create(['name' => 'Categoria 1']);
        $etiqueta   = factory(Tag::class)->create(['name' => 'Etiqueta 1']);
        $post     = factory(Post::class)->create([
            'user_id'       => $this->login()->id,
            'category_id'   => $category->id,
            'name'          => 'Evento 1'
        ]);
        $this->get("/posts/{$post->id}") // evento/2
            ->assertStatus(200)
            ->assertSee('Evento 1');
    }

    /** @test */
    function it_loads_the_new_eventos_page() // Create
    {
        $this->login();
        $this->get('/posts/create')
            ->assertStatus(200)
            ->assertSee('Lista de Eventos');
    }

    /** @test */
    function it_creates_a_new_evento() // Store
    {
        $this->withoutExceptionHandling();
        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $this->post('/posts/store', [
            'user_id' => $this->login()->id,
            'category_id' => $category->id, 
            'name' => 'Evento 1',  
            'slug' => 'evento-1',  
            'excerpt' => 'eventoss',
            'body' => 'Descripcion', 
            'status' => 'PUBLISHED',
            'date' => 'Lunes 24 de junio', 
            'time' => '09:00 AM', 
            'place' => 'Auditorio unheval'
            ])->assertRedirect('/posts/3/edit');
        $this->assertDatabaseHas('posts',[
            'name' => 'Evento 1',  
            'slug' => 'evento-1',  
            'excerpt' => 'eventoss',
            'body' => 'Descripcion', 
            'status' => 'PUBLISHED',
            'date' => 'Lunes 24 de junio', 
            'time' => '09:00 AM', 
            'place' => 'Auditorio unheval'
        ]);
    }

    /** @test */
    function it_loads_the_edit_evento_page() // Edit
    {
        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $post = factory(Post::class)->create([
            'user_id' => $this->login()->id,
            'category_id' => $category->id, 
            'name' => 'Evento 1',  
            'slug' => 'evento-1',  
            'excerpt' => 'eventoss',
            'body' => 'Descripcion', 
            'status' => 'PUBLISHED',
            'date' => 'Lunes 24 de junio', 
            'time' => '09:00 AM', 
            'place' => 'Auditorio unheval'
        ]);

        $this->get("/posts/{$post->id}/edit") // post/1/edit
            ->assertStatus(200)
            ->assertViewIs('admin.posts.edit')
            ->assertSee('Lista de Eventos')
            ->assertViewHas('post', 
                        function ($viewPost) use ($post) { 
                            return $viewPost->id === $post->id;
                        });
    }

    /** @test */
    function it_updates_a_evento() // Update
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
        $post = factory(Post::class)->create([
            'user_id' => $user->id,
            'category_id' => $category->id, 
            'name' => 'Evento 1',  
            'slug' => 'evento-1',  
            'excerpt' => 'eventoss',
            'body' => 'Descripcion', 
            'status' => 'PUBLISHED',
            'date' => 'Lunes 24 de junio', 
            'time' => '09:00 AM', 
            'place' => 'Auditorio unheval'
            ]);
        $this->put("/posts/{$post->id}", [
            'user_id' => $user->id,
            'category_id' => $category->id, 
            'name' => 'Evento 1',  
            'slug' => 'evento-1',  
            'excerpt' => 'eventoss',
            'body' => 'Descripcion', 
            'status' => 'PUBLISHED',
            'date' => 'Lunes 24 de junio', 
            'time' => '09:00 AM', 
            'place' => 'Auditorio unheval'
        ])->assertRedirect("/posts/{$post->id}/edit");

        $this->assertDatabaseHas('posts',[
            'user_id' => $user->id,
            'category_id' => $category->id, 
            'name' => 'Evento 1',  
            'slug' => 'evento-1',  
            'excerpt' => 'eventoss',
            'body' => 'Descripcion', 
            'status' => 'PUBLISHED',
            'date' => 'Lunes 24 de junio', 
            'time' => '09:00 AM', 
            'place' => 'Auditorio unheval'
        ]);
    }

    /** @test */
    function it_deletes_a_evento() // Delete
    {
        $this->withoutExceptionHandling();

        $category = factory(Category::class)->create(['name' => 'Categoria 1']);
        $post = factory(Post::class)->create([
            'user_id' => $this->login()->id,
            'category_id' => $category->id,
            'name' => 'Evento 1'
        ]);
        $this->delete("posts/{$post->id}")
            ->assertRedirect('/');

        $this->assertDatabaseMissing('posts', [
           'id' => $post->id
        ]);
    }
}
