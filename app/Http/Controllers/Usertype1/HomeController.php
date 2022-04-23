<?php

namespace App\Http\Controllers\Usertype1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('usertype1');
    }

    public function index() {
        $users = User::where('type', 1)->get();
        $usertype = 1;

        return view('usertype1.index', compact('users', 'usertype'));
    }

    public function logout() {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
