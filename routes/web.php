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
Route::get('dti', 				'Web\PageController@dti')->name('dti');
Route::get('portafolios',		'Web\PageController@portafolios')->name('portafolios');
Route::get('servicios',			'Web\PageController@servicios')->name('servicios');
Route::get('servicio/{slug}',	'Web\PageController@servicio')->name('servicio');
Route::get('eventos',			'Web\PageController@eventos')->name('eventos');
Route::get('evento/{slug}',		'Web\PageController@evento')->name('evento');
Route::get('contactos',			'Web\PageController@contactos')->name('contactos');
Route::get('nosotros',			'Web\PageController@nosotros')->name('nosotros');
Route::post('messages',			'Web\PageController@mensaje')->name('messages');
// Route::get('icons',				'Web\PageController@icons')->name('icons');
// Filtros
Route::get('eventos/categoria/{slug}', 	'Web\PageController@category')->name('category');
Route::get('eventos/etiqueta/{slug}',  	'Web\PageController@tag')->name('tag');

// admin
// Route::resource('tags', 		'Admin\TagController');
// Route::resource('categories',   'Admin\CategoryController');
// Route::resource('posts', 		'Admin\PostController');

// Admin -> Rutas en inglés
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Routers
Route::middleware(['auth'])->group(function() {
	// Role
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

	// User
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

	// Category
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

	// Post
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

	// Company
	Route::get('companies/{company}/edit', 'Admin\CompanyController@edit')->name('companies.edit')
		->middleware('permission:companies.edit');
		Route::put('companies/{company}', 'Admin\CompanyController@update')->name('companies.update')
		->middleware('permission:companies.edit');

	// Unity
	Route::post('unities/store', 'Admin\UnityController@store')->name('unities.store')
		->middleware('permission:unities.create');
	Route::get('unities', 'Admin\UnityController@index')->name('unities.index')
		->middleware('permission:unities.index');
	Route::get('unities/create', 'Admin\UnityController@create')->name('unities.create')
		->middleware('permission:unities.create');
	Route::put('unities/{unity}', 'Admin\UnityController@update')->name('unities.update')
		->middleware('permission:unities.edit');
	Route::get('unities/{unity}', 'Admin\UnityController@show')->name('unities.show')
		->middleware('permission:unities.show');
	Route::delete('unities/{unity}', 'Admin\UnityController@destroy')->name('unities.destroy')
		->middleware('permission:unities.destroy');
	Route::get('unities/{unity}/edit', 'Admin\UnityController@edit')->name('unities.edit')
		->middleware('permission:unities.edit');

	// Team
	Route::post('teams/store', 'Admin\TeamController@store')->name('teams.store')
		->middleware('permission:teams.create');
	Route::get('teams', 'Admin\TeamController@index')->name('teams.index')
		->middleware('permission:teams.index');
	Route::get('teams/create', 'Admin\TeamController@create')->name('teams.create')
		->middleware('permission:teams.create');
	Route::put('teams/{team}', 'Admin\TeamController@update')->name('teams.update')
		->middleware('permission:teams.edit');
	Route::get('teams/{team}', 'Admin\TeamController@show')->name('teams.show')
		->middleware('permission:teams.show');
	Route::delete('teams/{team}', 'Admin\TeamController@destroy')->name('teams.destroy')
		->middleware('permission:teams.destroy');
	Route::get('teams/{team}/edit', 'Admin\TeamController@edit')->name('teams.edit')
		->middleware('permission:teams.edit');

	// Testimony
	Route::post('testimonies/store', 'Admin\TestimonyController@store')->name('testimonies.store')
		->middleware('permission:testimonies.create');
	Route::get('testimonies', 'Admin\TestimonyController@index')->name('testimonies.index')
		->middleware('permission:testimonies.index');
	Route::get('testimonies/create', 'Admin\TestimonyController@create')->name('testimonies.create')
		->middleware('permission:testimonies.create');
	Route::put('testimonies/{testimony}', 'Admin\TestimonyController@update')->name('testimonies.update')
		->middleware('permission:testimonies.edit');
	Route::get('testimonies/{testimony}', 'Admin\TestimonyController@show')->name('testimonies.show')
		->middleware('permission:testimonies.show');
	Route::delete('testimonies/{testimony}', 'Admin\TestimonyController@destroy')->name('testimonies.destroy')
		->middleware('permission:testimonies.destroy');
	Route::get('testimonies/{testimony}/edit', 'Admin\TestimonyController@edit')->name('testimonies.edit')
		->middleware('permission:testimonies.edit');

	// Customer
	Route::post('customers/store', 'Admin\CustomerController@store')->name('customers.store')
		->middleware('permission:customers.create');
	Route::get('customers', 'Admin\CustomerController@index')->name('customers.index')
		->middleware('permission:customers.index');
	Route::get('customers/create', 'Admin\CustomerController@create')->name('customers.create')
		->middleware('permission:customers.create');
	Route::put('customers/{customer}', 'Admin\CustomerController@update')->name('customers.update')
		->middleware('permission:customers.edit');
	Route::get('customers/{customer}', 'Admin\CustomerController@show')->name('customers.show')
		->middleware('permission:customers.show');
	Route::delete('customers/{customer}', 'Admin\CustomerController@destroy')->name('customers.destroy')
		->middleware('permission:customers.destroy');
	Route::get('customers/{customer}/edit', 'Admin\CustomerController@edit')->name('customers.edit')
		->middleware('permission:customers.edit');

	// Presentation
	Route::post('presentations/store', 'Admin\PresentationController@store')->name('presentations.store')
		->middleware('permission:presentations.create');
	Route::get('presentations', 'Admin\PresentationController@index')->name('presentations.index')
		->middleware('permission:presentations.index');
	Route::get('presentations/create', 'Admin\PresentationController@create')->name('presentations.create')
		->middleware('permission:presentations.create');
	Route::put('presentations/{presentation}', 'Admin\PresentationController@update')->name('presentations.update')
		->middleware('permission:presentations.edit');
	Route::get('presentations/{presentation}', 'Admin\PresentationController@show')->name('presentations.show')
		->middleware('permission:presentations.show');
	Route::delete('presentations/{presentation}', 'Admin\PresentationController@destroy')->name('presentations.destroy')
		->middleware('permission:presentations.destroy');
	Route::get('presentations/{presentation}/edit', 'Admin\PresentationController@edit')->name('presentations.edit')
		->middleware('permission:presentations.edit');
});
	