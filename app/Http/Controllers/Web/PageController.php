<?php

namespace App\Http\Controllers\Web;

use App\Tag;
use App\Post;
use App\Service;
use App\Category;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	// Pagina Principal 
    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $servicios = Category::orderBy('id', 'DESC')->where('type', 'SERVICE')->get();
    	return view('web.welcome', compact('posts','servicios')) ;
    }
    
    public function eventos(){
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        
    	return view('web.eventos', compact('posts')) ;
    }
    public function evento($slug){
        $post = Post::orderBy('id', 'DESC')->where('slug',$slug)->where('status', 'PUBLISHED')->first();
        return view('web.evento', compact('post')) ;
    }
    // SERVICE
    public function servicios(){
        $servicios = Category::orderBy('id', 'DESC')->where('type', 'SERVICE')->get();
    	return view('web.servicios', compact('servicios'));
    }
    public function servicio($slug){
        $category   = Category::where('slug', $slug)->pluck('id')->first();
        $servicio    = Service::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        return view('web.servicio', compact('slug','servicio')) ;

    }
    public function nosotros(){
    	return view('web.about');
    }
    public function contact(){
    	return view('web.contact');
    }
    public function portafolios(){
        $portfolios = DB::select("select p.id, (select po.name from posts as po where po.id=p.post_id ) as 'name',(select po.file from posts as po where po.id=p.post_id ) as 'img',  p.film, p.body from portfolios as p");
        
        // dd($portfolios);
        return view('web.portfolio', compact('portfolios'));
    }
    public function icons(){
        return view('admin.icons');
    }
}
