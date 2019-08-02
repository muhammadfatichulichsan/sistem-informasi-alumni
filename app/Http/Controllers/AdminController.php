<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function index()
    {
    	$user = User::where('is_admin' , false )->get();
    	return view('admin/index' , compact('user'));
    }
}
