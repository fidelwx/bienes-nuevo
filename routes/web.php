<?php

Route::get('/', function (){
	return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Rutas
/*
Route::middleware(['auth'])->group(function (){
	//roles
	Route::post('roles/crear', 'RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');


	//Bienes
	Route::post('bienes/crear', 'BelongingsController@store')->name('bienes.store')
			->middleware('permission:bienes.create');

	Route::get('bienes', 'BelongingsController@index')->name('bienes.index')
			->middleware('permission:bienes.index');

	Route::get('bienes/create', 'BelongingsController@create')->name('bienes.create')
			->middleware('permission:bienes.create');

	Route::put('bienes/{role}', 'BelongingsController@update')->name('bienes.update')
			->middleware('permission:bienes.edit');

	Route::get('bienes/{role}', 'BelongingsController@show')->name('bienes.show')
			->middleware('permission:bienes.show');

	Route::delete('bienes/{role}', 'BelongingsController@destroy')->name('bienes.destroy')
			->middleware('permission:bienes.destroy');

	Route::get('bienes/{role}/edit', 'BelongingsController@edit')->name('bienes.edit')
			->middleware('permission:bienes.edit');


	//Usuarios
	Route::post('usuarios/crear', 'UserController@store')->name('usuarios.store')
			->middleware('permission:usuarios.create');

	Route::get('usuarios', 'UserController@index')->name('usuarios.index')
			->middleware('permission:usuarios.index');

	Route::get('usuarios/create', 'UserController@create')->name('usuarios.create')
			->middleware('permission:usuarios.create');

	Route::put('usuarios/{role}', 'UserController@update')->name('usuarios.update')
			->middleware('permission:usuarios.edit');

	Route::get('usuarios/{role}', 'UserController@show')->name('usuarios.show')
			->middleware('permission:usuarios.show');

	Route::delete('usuarios/{role}', 'UserController@destroy')->name('usuarios.destroy')
			->middleware('permission:usuarios.destroy');

	Route::get('usuarios/{role}/edit', 'UserController@edit')->name('usuarios.edit')
			->middleware('permission:usuarios.edit');
});
*/

Route::group(['middleware' => ['auth']], function (){
	
	Route::group(['middleware' => ['Compras']], function (){
		Route::resource('bienes','BelongingsController');
		Route::get('bien','BelongingsController@all');
	});

	Route::group(['middleware' => ['Admin']], function (){
		Route::resource('usuarios','UserController');
		Route::get('usuario','UserController@all');

		Route::resource('bienes','BelongingsController');
		Route::get('bien','BelongingsController@all');

		Route::resource('categorias','BelongingsController');
		Route::get('categoria','BelongingsController@all');

		Route::resource('tipos','BelongingsController');
		Route::get('tipo','BelongingsController@all');

		Route::resource('dependencias','BelongingsController');
		Route::get('dependencia','BelongingsController@all');
	});
	
});


