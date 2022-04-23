<?php

namespace App\Http\Controllers\Usertype2;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;;
use Session;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('usertype2');
    }

    public function index() {
        $users = User::where('type', 2)->get();
        $usertype = 2;

        return view('usertype2.index', compact('users','usertype'));
    }

    public function logout() {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
