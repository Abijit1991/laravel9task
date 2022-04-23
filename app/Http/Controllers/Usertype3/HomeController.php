<?php

namespace App\Http\Controllers\Usertype3;

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
        $this->middleware('usertype3');
    }

    public function index() {
        $users = User::where('type', 3)->get();
        $usertype = 3;

        return view('usertype3.index', compact('users', 'usertype'));
    }

    public function logout() {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
