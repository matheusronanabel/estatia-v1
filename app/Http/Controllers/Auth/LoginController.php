<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View as View;

class LoginController extends Controller
{
    function index() : View {
        return view('auth.login.index');
    }
}
