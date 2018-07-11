<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioStoreRequest;
use App\Http\Requests\PortfolioUpdateRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $portfolios = Portfolio::orderBy('id', 'DESC')->paginate(3);
        // $posts = Post::orderBy('id', 'DESC')->paginate();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('name', 'ASC')->where('status', 'PUBLISHED')->pluck('name','id');

        return view('admin.portfolio.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioStoreRequest $request)
    {
        $portfolio = Portfolio::create($request->all());

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $portfolio->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('portfolios.edit', $portfolio->id)
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
        $portfolio = Portfolio::find($id);
        // $this->authorize('pass',$post);

        return view('admin.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $posts = Post::orderBy('name', 'ASC')->where('status', 'PUBLISHED')->pluck('name','id');
        $portfolio = Portfolio::find($id);
        // $this->authorize('pass',$post);
        $posts = Post::orderBy('name', 'ASC')->where('status', 'PUBLISHED')->pluck('name','id');

        // $categories = Category::orderBy('name', 'ASC')->where('type','EVENT')->pluck('name','id');
        // $tags = Tag::orderBy('name', 'ASC')->get();
        

        return view('admin.portfolio.edit', compact('portfolio', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioUpdateRequest $request, $id)
    {
        //
        $portfolio = Portfolio::find($id);
        // $this->authorize('pass',$post);
        $portfolio->fill($request->all())->save();

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $portfolio->fill(['file' => asset($path)])->save();
        }

        //TAGS

        return redirect()->route('portfolios.edit', $portfolio->id)
        ->with('info', 'Portfolio actualizado con éxito');
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
        $portfolio = Portfolio::find($id);
        // $this->authorize('pass',$post);
        $portfolio->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
