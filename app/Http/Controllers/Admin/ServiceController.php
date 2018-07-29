<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::all();
        // $services = Service::orderBy('id', 'DESC')->paginate();
        //return view('admin.services.index', compact('services'));
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name', 'ASC')->where('type','SERVICE')->pluck('name','id');

        // $tags = Tag::orderBy('name', 'ASC')->get();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStoreRequest $request)
    {
        //
        $service = Service::create($request->all());

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image/servicios', $request->file('file'));
            $service->fill(['file' => asset($path)])->save();
        }

        //TAGS
        // $service->tags()->attach($request->get('tags'));

        return redirect()->route('services.edit', $service->id)
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
        //
        $service = Service::findOrFail($id);
        // $this->authorize('pass',$service);

        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $service = Service::findOrFail($id);
        // $this->authorize('pass',$service);
        $categories = Category::orderBy('name', 'ASC')->where('type','SERVICE')->pluck('name','id');

        // $tags = Tag::orderBy('name', 'ASC')->get();
        

        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, $id)
    {
        //
        $service = Service::findOrFail($id);
        // $this->authorize('pass',$service);
        $service->fill($request->all())->save();

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image/servicios', $request->file('file'));
            $service->fill(['file' => asset($path)])->save();
        }

        //TAGS
        // $service->tags()->sync($request->get('tags'));

        return redirect()->route('services.edit', $service->id)
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
        $service = Service::findOrFail($id);
        // $this->authorize('pass',$service);
        $service->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
