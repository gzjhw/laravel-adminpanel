<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class MainController extends Controller
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
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$users  = Users::take(30)->get();
		return view('backend.main',['users'=>$users]);
	}
	public function users(Builder $builder)
	{
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
		return view('backend.users.main',['html'=>$html]);
	}
}
