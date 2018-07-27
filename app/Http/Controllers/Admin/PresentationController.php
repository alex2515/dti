<?php
namespace App\Http\Controllers\Admin;
use App\Presentation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PresentationStoreRequest;
use App\Http\Requests\PresentationUpdateRequest;

class PresentationController extends Controller
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
        $presentations = Presentation::all();
        return view('admin.presentations.index', compact('presentations'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.presentations.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PresentationStoreRequest $request)
    {
        $presentation = Presentation::create($request->all());
        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image/presentacion/',  $request->file('file'));
            $presentation->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('presentations.edit', $presentation->id)->with('info', 'Entrada creada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presentation = Presentation::findOrFail($id);
        return view('admin.presentations.show', compact('presentation'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentation       = Presentation::findOrFail($id);
        return view('admin.presentations.edit', compact('presentation'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PresentationUpdateRequest $request, $id)
    {
        $presentation = Presentation::findOrFail($id);
        $presentation->fill($request->all())->save();
        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image/presentacion/',  $request->file('file'));
            $presentation->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('presentations.edit', $presentation->id)->with('info', 'Entrada actualizada con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presentation = Presentation::findOrFail($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}