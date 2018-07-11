<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Web -> Rutas en español
Route::redirect('/', 'dti');
Route::get('dti', 'Web\PageController@blog')->name('blog');
Route::get('portafolios','Web\PageController@portafolios')->name('portafolios');
Route::get('servicios','Web\PageController@servicios')->name('servicios');
Route::get('servicio/{slug}','Web\PageController@servicio')->name('servicio');
Route::get('eventos','Web\PageController@eventos')->name('eventos');
Route::get('evento/{slug}','Web\PageController@evento')->name('evento');
Route::get('contact','Web\PageController@contact')->name('contact');
Route::get('nosotros','Web\PageController@nosotros')->name('nosotros');
Route::get('icons','Web\PageController@icons')->name('icons');

Route::post('messages', function(){
	$data = request()->all();
	//dd($data);
	//enviar correo
	if ($data['email'] != "") {
		# code...
		Mail::send("admin.emails.messages", $data, function($message) use ($data){
			
			$message->from($data['email'], $data['name']) // DE: 
					->to($data['emailoficina'], 'Alexander') // PARA: 
					->subject($data['subject']); // ASUNTO: 
		});
	}
	//responder al usuario
	 return back();
})->name('messages');


// admin
// Route::resource('tags', 		'Admin\TagController');
// Route::resource('categories',   'Admin\CategoryController');
// Route::resource('posts', 		'Admin\PostController');

// Admin -> Rutas en inglés
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Routers
Route::middleware(['auth'])->group(function() {
	// Roles
	Route::post('roles/store', 'Admin\RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');
	Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');
	Route::get('roles/create', 'Admin\RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');
	Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');
	Route::get('roles/{role}', 'Admin\RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');
	Route::delete('roles/{role}', 'Admin\RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');
	Route::get('roles/{role}/edit', 'Admin\RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');

	// Product
	Route::post('products/store', 'Admin\ProductController@store')->name('products.store')
		->middleware('permission:products.create');
	Route::get('products', 'Admin\ProductController@index')->name('products.index')
		->middleware('permission:products.index');
	Route::get('products/create', 'Admin\ProductController@create')->name('products.create')
		->middleware('permission:products.create');
	Route::put('products/{product}', 'Admin\ProductController@update')->name('products.update')
		->middleware('permission:products.edit');
	Route::get('products/{product}', 'Admin\ProductController@show')->name('products.show')
		->middleware('permission:products.show');
	Route::delete('products/{product}', 'Admin\ProductController@destroy')->name('products.destroy')
		->middleware('permission:products.destroy');
	Route::get('products/{product}/edit', 'Admin\ProductController@edit')->name('products.edit')
		->middleware('permission:products.edit');

	// Users
	Route::get('users', 'Admin\UserController@index')->name('users.index')
		->middleware('permission:users.index');
	Route::put('users/{user}', 'Admin\UserController@update')->name('users.update')
		->middleware('permission:users.edit');
	Route::get('users/{user}', 'Admin\UserController@show')->name('users.show')
		->middleware('permission:users.show');
	Route::delete('users/{user}', 'Admin\UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');
	Route::get('users/{user}/edit', 'Admin\UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	// Tag
	Route::post('tags/store', 'Admin\TagController@store')->name('tags.store')
		->middleware('permission:tags.create');
	Route::get('tags', 'Admin\TagController@index')->name('tags.index')
		->middleware('permission:tags.index');
	Route::get('tags/create', 'Admin\TagController@create')->name('tags.create')
		->middleware('permission:tags.create');
	Route::put('tags/{tag}', 'Admin\TagController@update')->name('tags.update')
		->middleware('permission:tags.edit');
	Route::get('tags/{tag}', 'Admin\TagController@show')->name('tags.show')
		->middleware('permission:tags.show');
	Route::delete('tags/{tag}', 'Admin\TagController@destroy')->name('tags.destroy')
		->middleware('permission:tags.destroy');
	Route::get('tags/{tag}/edit', 'Admin\TagController@edit')->name('tags.edit')
		->middleware('permission:tags.edit');

	// Categories
	Route::post('categories/store', 'Admin\CategoryController@store')->name('categories.store')
		->middleware('permission:categories.create');
	Route::get('categories', 'Admin\CategoryController@index')->name('categories.index')
		->middleware('permission:categories.index');
	Route::get('categories/create', 'Admin\CategoryController@create')->name('categories.create')
		->middleware('permission:categories.create');
	Route::put('categories/{category}', 'Admin\CategoryController@update')->name('categories.update')
		->middleware('permission:categories.edit');
	Route::get('categories/{category}', 'Admin\CategoryController@show')->name('categories.show')
		->middleware('permission:categories.show');
	Route::delete('categories/{category}', 'Admin\CategoryController@destroy')->name('categories.destroy')
		->middleware('permission:categories.destroy');
	Route::get('categories/{category}/edit', 'Admin\CategoryController@edit')->name('categories.edit')
		->middleware('permission:categories.edit');

	// Posts
	Route::post('posts/store', 'Admin\PostController@store')->name('posts.store')
		->middleware('permission:posts.create');
	Route::get('posts', 'Admin\PostController@index')->name('posts.index')
		->middleware('permission:posts.index');
	Route::get('posts/create', 'Admin\PostController@create')->name('posts.create')
		->middleware('permission:posts.create');
	Route::put('posts/{post}', 'Admin\PostController@update')->name('posts.update')
		->middleware('permission:posts.edit');
	Route::get('posts/{post}', 'Admin\PostController@show')->name('posts.show')
		->middleware('permission:posts.show');
	Route::delete('posts/{post}', 'Admin\PostController@destroy')->name('posts.destroy')
		->middleware('permission:posts.destroy');
	Route::get('posts/{post}/edit', 'Admin\PostController@edit')->name('posts.edit')
		->middleware('permission:posts.edit');

	// Service
	Route::post('services/store', 'Admin\ServiceController@store')->name('services.store')
		->middleware('permission:services.create');
	Route::get('services', 'Admin\ServiceController@index')->name('services.index')
		->middleware('permission:services.index');
	Route::get('services/create', 'Admin\ServiceController@create')->name('services.create')
		->middleware('permission:services.create');
	Route::put('services/{service}', 'Admin\ServiceController@update')->name('services.update')
		->middleware('permission:services.edit');
	Route::get('services/{service}', 'Admin\ServiceController@show')->name('services.show')
		->middleware('permission:services.show');
	Route::delete('services/{service}', 'Admin\ServiceController@destroy')->name('services.destroy')
		->middleware('permission:services.destroy');
	Route::get('services/{service}/edit', 'Admin\ServiceController@edit')->name('services.edit')
		->middleware('permission:services.edit');

	// Portfolio
	Route::post('portfolios/store', 'Admin\PortfolioController@store')->name('portfolios.store')
		->middleware('permission:portfolios.create');
	Route::get('portfolios', 'Admin\PortfolioController@index')->name('portfolios.index')
		->middleware('permission:portfolios.index');
	Route::get('portfolios/create', 'Admin\PortfolioController@create')->name('portfolios.create')
		->middleware('permission:portfolios.create');
	Route::put('portfolios/{portfolio}', 'Admin\PortfolioController@update')->name('portfolios.update')
		->middleware('permission:portfolios.edit');
	Route::get('portfolios/{portfolio}', 'Admin\PortfolioController@show')->name('portfolios.show')
		->middleware('permission:portfolios.show');
	Route::delete('portfolios/{portfolio}', 'Admin\PortfolioController@destroy')->name('portfolios.destroy')
		->middleware('permission:portfolios.destroy');
	Route::get('portfolios/{portfolio}/edit', 'Admin\PortfolioController@edit')->name('portfolios.edit')
		->middleware('permission:portfolios.edit');
});
	