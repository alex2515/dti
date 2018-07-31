<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Company;
use App\Service;
use App\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts      = Post::count();
        $services   = Service::count();
        $users      = User::count();
        $portfolios = Portfolio::count();
        return view('home', compact('posts', 'services', 'users', 'portfolios'));
    }
}
