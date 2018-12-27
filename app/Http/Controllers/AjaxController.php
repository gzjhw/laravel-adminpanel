<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
	public function index() {
		return datatables()->of(Users::query())->toJson();
		$users = Users::all();
		return response()->json($users, 200);
	}
}
