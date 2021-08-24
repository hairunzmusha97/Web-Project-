<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function home(){
        return view("home");
    }

    public function redirects(){
        $usertype= Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }
        else{
            return view('home');
        }
    }
}
