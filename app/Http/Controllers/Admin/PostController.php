<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    // function __construct()
    // {
    //     // $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all();
        // $posts = Post::orderBy('id', 'DESC')
        //     ->where('user_id', auth()->user()->id)->paginate();
         // $posts = Post::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->where('type','EVENT')->pluck('name','id');
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image/posts', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        //TAGS
        $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
        ->with('info', 'Entrada creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        // $this->authorize('pass',$post);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        // $this->authorize('pass',$post);
        $categories = Category::orderBy('name', 'ASC')->where('type','EVENT')->pluck('name','id');
        $tags = Tag::orderBy('name', 'ASC')->get();
        

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        //
        $post = Post::findOrFail($id);
        
        // dd($post);
        // $this->authorize('pass',$post);
        $post->fill($request->all())->save();

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image/posts', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        //TAGS
        $post->tags()->sync($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
        ->with('info', 'Entrada actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);
        // $this->authorize('pass',$post);
        $post->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
