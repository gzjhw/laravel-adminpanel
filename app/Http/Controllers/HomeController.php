<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Users;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
	    $users  = Users::take(30)->get();
        return view('frontend.home',['users'=>$users]);
    }

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function admin()
	{
		$users  = Users::take(30)->get();

		return view('backend.admin',['users'=>$users]);
	}

	public function list()
	{
		return datatables()->of(Users::query())->toJson();
	}

	public function table_test(Builder $builder)
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
		return view('frontend.test',['html'=>$html]);
	}
}
