<?php

namespace App\Http\Controllers\Web;

use App\Tag;
use App\Post;
use App\Team;
use App\Unity;
use App\Company;
use App\Service;
use App\Category;
use App\Customer;
use App\Portfolio;
use App\Testimony;
use Carbon\Carbon;
use App\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendMessageRequest;

class PageController extends Controller
{
	// Pagina Principal 
    public function dti(){
    	$posts          = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $servicios      = Category::orderBy('id', 'DESC')->where('type', 'SERVICE')->get();
        $company        = Company::first();
        $unities        = Unity::all();
        $customers      = Customer::all();
        $teams          = Team::all();
        $testimonies    = Testimony::all();
        $presentations  = Presentation::where('file','!=', '')->get();

    	return view('web.dti', compact('posts','servicios','company','unities', 'customers', 'teams', 'testimonies', 'presentations' )) ;
    }
    
    public function eventos(){
        $company = Company::first();
        $posts   = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('web.eventos', compact('company','posts')) ;
    }

    public function evento($slug){
        $company = Company::first();
        $post    = Post::orderBy('id', 'DESC')->where('slug',$slug)->where('status', 'PUBLISHED')->first();

        return view('web.evento', compact('company','post')) ;
    }

    //FILTROS
    public function category($slug){
        $company  = Company::first();
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts    = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.eventos', compact('company','posts')) ;
    }

    public function tag($slug){
        $company = Company::first();
        $posts   = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        
        return view('web.eventos', compact('company','posts')) ;
    }

    // SERVICE
    public function servicios(){
        $company   = Company::first();
        $servicios = Category::orderBy('id', 'DESC')->where('type', 'SERVICE')->get();

    	return view('web.servicios', compact('company','servicios'));
    }

    public function servicio($slug){
        $company    = Company::first();
        $category   = Category::where('slug', $slug)->pluck('id')->first();
        $servicio   = Service::where('category_id', $category)
            ->orderBy('id', 'DESC')->paginate(5);

        return view('web.servicio', compact('company','slug','servicio')) ;
    }

    public function nosotros(){
        $company        = Company::first();
        $unities        = Unity::all();

    	return view('web.about', compact('company','company','unities'));
    }

    public function contactos(){
        $company        = Company::first();
        $unities        = Unity::all();
        $company        = Company::first();
        
    	return view('web.contact',compact('company','unities','company'));
    }

    public function portafolios(){
        $company        = Company::first();
        // $portfolios = DB::select("select p.id, (select po.name from posts as po where po.id=p.post_id ) as 'name',(select po.file from posts as po where po.id=p.post_id ) as 'img',  p.film, p.body from portfolios as p");
        $portfolios = DB::table('posts as po')->join('portfolios as p','p.post_id','=','po.id')->select('p.id','po.name','po.file as img','p.film','p.body')->paginate(5);
        // $post = Post::has('portfolio')->pluck('id','name')->each()->values();
        // dd($post);

        // $portfolios = Portfolio::whereHas('post')->get();
        
        // dd($portfolios);
        return view('web.portfolio', compact('company','portfolios'));
    }

    public function icons(){
        return view('admin.icons');
    }
    
    public function mensaje(){
        $data = request()->all();
        //dd($data);
        //enviar correo
        if ($data['email'] != "") {
            # code...
            Mail::send("emails.messages", $data, function($message) use ($data){
                
                $message->from($data['email'], $data['name']) // DE: 
                        ->to($data['emailbusiness'], 'Alexander') // PARA: 
                        ->subject($data['subject']); // ASUNTO: 
            });
        }
        //responder al usuario
         return back();
     }
}
