<?php
namespace App\Http\Controllers\Admin;
use App\Testimony;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TestimonyStoreRequest;
use App\Http\Requests\TestimonyUpdateRequest;

class TestimonyController extends Controller
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
        $testimonies = Testimony::all();
        return view('admin.testimonies.index', compact('testimonies'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonies.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonyStoreRequest $request)
    {
        $testimony = Testimony::create($request->all());
        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image/testi/',  $request->file('file'));
            $testimony->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('testimonies.edit', $testimony->id)->with('info', 'Entrada creada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimony = Testimony::find($id);
        return view('admin.testimonies.show', compact('testimony'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimony       = Testimony::find($id);
        return view('admin.testimonies.edit', compact('testimony'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonyUpdateRequest $request, $id)
    {
        $testimony = Testimony::find($id);
        $testimony->fill($request->all())->save();
        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image/testi/',  $request->file('file'));
            $testimony->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('testimonies.edit', $testimony->id)->with('info', 'Entrada actualizada con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimony = Testimony::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}