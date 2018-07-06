<?php

namespace App\Http\Controllers\Web;

use App\Tag;
use App\Post;
use App\Service;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	// EVENTS
    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
    	return view('web.welcome', compact('posts')) ;
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
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.servicio', compact('slug','servicio')) ;

    }
    public function nosotros(){
    	return view('web.about');
    }
    public function contact(){
    	return view('web.contact');
    }
    public function portafolios(){
        return view('web.portfolio');
    }
    public function icons(){
        return view('admin.icons');
    }
}
