<?php
namespace App\Http\Controllers\Admin;
use App\Unity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UnityStoreRequest;
use App\Http\Requests\UnityUpdateRequest;

class UnityController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unities = Unity::all();
        return view('admin.unities.index', compact('unities'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unities.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnityStoreRequest $request)
    {
        $unity = Unity::create($request->all());
        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',  $request->file('file'));
            $unity->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('unities.edit', $unity->id)->with('info', 'Entrada creada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unity = Unity::find($id);
        return view('admin.unities.show', compact('unity'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unity       = Unity::find($id);
        return view('admin.unities.edit', compact('unity'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnityUpdateRequest $request, $id)
    {
        $unity = Unity::find($id);
        $unity->fill($request->all())->save();
        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('file',  $request->file('file'));
            $unity->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('unities.edit', $unity->id)->with('info', 'Entrada actualizada con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unity = Unity::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}