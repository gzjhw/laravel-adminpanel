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

	use App\User;
	use Yajra\DataTables\DataTables;
	use Yajra\DataTables\Html\Builder;

	Route::get('/', function() {
		return view('frontend.welcome');
	});

	Auth::routes();

	Route::get('/backend', 'Backend\MainController@index')->name('backend');
	Route::get('/backend/users', 'Backend\MainController@users')->name('backend.users');
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/list', 'HomeController@list')->name('list');
	Route::get('/ajax', 'AjaxController@index')->name('ajax');


	Route::get('/table-test', 'HomeController@table_test')->name('table-test');
	Route::get('/admin', 'HomeController@admin')->name('admin');


	Route::get('users', function(Builder $builder) {
		if(request()->ajax()) {
			return DataTables::of(User::query())->toJson();
		}

		$html = $builder->columns([
			['data' => 'id', 'name' => 'id', 'title' => 'Id'],
			['data' => 'name', 'name' => 'name', 'title' => 'Name'],
			['data' => 'email', 'name' => 'email', 'title' => 'Email'],
			['data' => 'created_at', 'name' => 'created_at', 'title' => 'Created At'],
			['data' => 'updated_at', 'name' => 'updated_at', 'title' => 'Updated At'],
		]);

		return view('frontend.users.index', compact('html'));
	});