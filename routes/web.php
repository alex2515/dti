<?php

// Web -> Rutas en español
Route::get('/', 				'Web\PageController@dti')->name('dti');
Route::get('portafolios',		'Web\PageController@portafolios')->name('portafolios');
Route::get('servicios',			'Web\PageController@servicios')->name('servicios');
Route::get('servicio/{slug}',	'Web\PageController@servicio')->name('servicio');
Route::get('eventos',			'Web\PageController@eventos')->name('eventos');
Route::get('evento/{slug}',		'Web\PageController@evento')->name('evento');
Route::get('contactos',			'Web\PageController@contactos')->name('contactos');
Route::get('nosotros',			'Web\PageController@nosotros')->name('nosotros');
Route::post('messages',			'Web\PageController@mensaje')->name('messages');
// Filtros
Route::get('eventos/categoria/{slug}', 	'Web\PageController@category')->name('category');
Route::get('eventos/etiqueta/{slug}',  	'Web\PageController@tag')->name('tag');

// Admin -> Rutas en inglés
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Routers
// Route::middleware(['auth', 'namespace' => 'Admin'])->group(function() {
Route::group([
	'namespace' => 'Admin',
	'middleware' => 'auth'], function(){
	// Role
	Route::resource('roles', 'RoleController');
	// User
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');
	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');
	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');
	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	// Tag
	Route::post('tags/store', 'TagController@store')->name('tags.store')
		->middleware('permission:tags.create');
	Route::get('tags', 'TagController@index')->name('tags.index')
		->middleware('permission:tags.index');
	Route::get('tags/create', 'TagController@create')->name('tags.create')
		->middleware('permission:tags.create');
	Route::put('tags/{tag}', 'TagController@update')->name('tags.update')
		->middleware('permission:tags.edit');
	Route::get('tags/{tag}', 'TagController@show')->name('tags.show')
		->middleware('permission:tags.show');
	Route::delete('tags/{tag}', 'TagController@destroy')->name('tags.destroy')
		->middleware('permission:tags.destroy');
	Route::get('tags/{tag}/edit', 'TagController@edit')->name('tags.edit')
		->middleware('permission:tags.edit');

	// Category
	Route::post('categories/store', 'CategoryController@store')->name('categories.store')
		->middleware('permission:categories.create');
	Route::get('categories', 'CategoryController@index')->name('categories.index')
		->middleware('permission:categories.index');
	Route::get('categories/create', 'CategoryController@create')->name('categories.create')
		->middleware('permission:categories.create');
	Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
		->middleware('permission:categories.edit');
	Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
		->middleware('permission:categories.show');
	Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
		->middleware('permission:categories.destroy');
	Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
		->middleware('permission:categories.edit');

	// Post
	Route::post('posts/store', 'PostController@store')->name('posts.store')
		->middleware('permission:posts.create');
	Route::get('posts', 'PostController@index')->name('posts.index')
		->middleware('permission:posts.index');
	Route::get('posts/create', 'PostController@create')->name('posts.create')
		->middleware('permission:posts.create');
	Route::put('posts/{post}', 'PostController@update')->name('posts.update')
		->middleware('permission:posts.edit');
	Route::get('posts/{post}', 'PostController@show')->name('posts.show')
		->middleware('permission:posts.show');
	Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy')
		->middleware('permission:posts.destroy');
	Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit')
		->middleware('permission:posts.edit');

	// Service
	Route::post('services/store', 'ServiceController@store')->name('services.store')
		->middleware('permission:services.create');
	Route::get('services', 'ServiceController@index')->name('services.index')
		->middleware('permission:services.index');
	Route::get('services/create', 'ServiceController@create')->name('services.create')
		->middleware('permission:services.create');
	Route::put('services/{service}', 'ServiceController@update')->name('services.update')
		->middleware('permission:services.edit');
	Route::get('services/{service}', 'ServiceController@show')->name('services.show')
		->middleware('permission:services.show');
	Route::delete('services/{service}', 'ServiceController@destroy')->name('services.destroy')
		->middleware('permission:services.destroy');
	Route::get('services/{service}/edit', 'ServiceController@edit')->name('services.edit')
		->middleware('permission:services.edit');

	// Portfolio
	Route::post('portfolios/store', 'PortfolioController@store')->name('portfolios.store')
		->middleware('permission:portfolios.create');
	Route::get('portfolios', 'PortfolioController@index')->name('portfolios.index')
		->middleware('permission:portfolios.index');
	Route::get('portfolios/create', 'PortfolioController@create')->name('portfolios.create')
		->middleware('permission:portfolios.create');
	Route::put('portfolios/{portfolio}', 'PortfolioController@update')->name('portfolios.update')
		->middleware('permission:portfolios.edit');
	Route::get('portfolios/{portfolio}', 'PortfolioController@show')->name('portfolios.show')
		->middleware('permission:portfolios.show');
	Route::delete('portfolios/{portfolio}', 'PortfolioController@destroy')->name('portfolios.destroy')
		->middleware('permission:portfolios.destroy');
	Route::get('portfolios/{portfolio}/edit', 'PortfolioController@edit')->name('portfolios.edit')
		->middleware('permission:portfolios.edit');

	// Company
	Route::get('companies/{company}/edit', 'CompanyController@edit')->name('companies/1/edit')
		->middleware('permission:companies/1/edit');
		Route::put('companies/{company}', 'CompanyController@update')->name('companies.update')
		->middleware('permission:companies.edit');

	// Unity
	Route::post('unities/store', 'UnityController@store')->name('unities.store')
		->middleware('permission:unities.create');
	Route::get('unities', 'UnityController@index')->name('unities.index')
		->middleware('permission:unities.index');
	Route::get('unities/create', 'UnityController@create')->name('unities.create')
		->middleware('permission:unities.create');
	Route::put('unities/{unity}', 'UnityController@update')->name('unities.update')
		->middleware('permission:unities.edit');
	Route::get('unities/{unity}', 'UnityController@show')->name('unities.show')
		->middleware('permission:unities.show');
	Route::delete('unities/{unity}', 'UnityController@destroy')->name('unities.destroy')
		->middleware('permission:unities.destroy');
	Route::get('unities/{unity}/edit', 'UnityController@edit')->name('unities.edit')
		->middleware('permission:unities.edit');

	// Team
	Route::post('teams/store', 'TeamController@store')->name('teams.store')
		->middleware('permission:teams.create');
	Route::get('teams', 'TeamController@index')->name('teams.index')
		->middleware('permission:teams.index');
	Route::get('teams/create', 'TeamController@create')->name('teams.create')
		->middleware('permission:teams.create');
	Route::put('teams/{team}', 'TeamController@update')->name('teams.update')
		->middleware('permission:teams.edit');
	Route::get('teams/{team}', 'TeamController@show')->name('teams.show')
		->middleware('permission:teams.show');
	Route::delete('teams/{team}', 'TeamController@destroy')->name('teams.destroy')
		->middleware('permission:teams.destroy');
	Route::get('teams/{team}/edit', 'TeamController@edit')->name('teams.edit')
		->middleware('permission:teams.edit');

	// Testimony
	Route::post('testimonies/store', 'TestimonyController@store')->name('testimonies.store')
		->middleware('permission:testimonies.create');
	Route::get('testimonies', 'TestimonyController@index')->name('testimonies.index')
		->middleware('permission:testimonies.index');
	Route::get('testimonies/create', 'TestimonyController@create')->name('testimonies.create')
		->middleware('permission:testimonies.create');
	Route::put('testimonies/{testimony}', 'TestimonyController@update')->name('testimonies.update')
		->middleware('permission:testimonies.edit');
	Route::get('testimonies/{testimony}', 'TestimonyController@show')->name('testimonies.show')
		->middleware('permission:testimonies.show');
	Route::delete('testimonies/{testimony}', 'TestimonyController@destroy')->name('testimonies.destroy')
		->middleware('permission:testimonies.destroy');
	Route::get('testimonies/{testimony}/edit', 'TestimonyController@edit')->name('testimonies.edit')
		->middleware('permission:testimonies.edit');

	// Customer
	Route::post('customers/store', 'CustomerController@store')->name('customers.store')
		->middleware('permission:customers.create');
	Route::get('customers', 'CustomerController@index')->name('customers.index')
		->middleware('permission:customers.index');
	Route::get('customers/create', 'CustomerController@create')->name('customers.create')
		->middleware('permission:customers.create');
	Route::put('customers/{customer}', 'CustomerController@update')->name('customers.update')
		->middleware('permission:customers.edit');
	Route::get('customers/{customer}', 'CustomerController@show')->name('customers.show')
		->middleware('permission:customers.show');
	Route::delete('customers/{customer}', 'CustomerController@destroy')->name('customers.destroy')
		->middleware('permission:customers.destroy');
	Route::get('customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit')
		->middleware('permission:customers.edit');

	// Presentation
	Route::post('presentations/store', 'PresentationController@store')->name('presentations.store')
		->middleware('permission:presentations.create');
	Route::get('presentations', 'PresentationController@index')->name('presentations.index')
		->middleware('permission:presentations.index');
	Route::get('presentations/create', 'PresentationController@create')->name('presentations.create')
		->middleware('permission:presentations.create');
	Route::put('presentations/{presentation}', 'PresentationController@update')->name('presentations.update')
		->middleware('permission:presentations.edit');
	Route::get('presentations/{presentation}', 'PresentationController@show')->name('presentations.show')
		->middleware('permission:presentations.show');
	Route::delete('presentations/{presentation}', 'PresentationController@destroy')->name('presentations.destroy')
		->middleware('permission:presentations.destroy');
	Route::get('presentations/{presentation}/edit', 'PresentationController@edit')->name('presentations.edit')
		->middleware('permission:presentations.edit');
});
	