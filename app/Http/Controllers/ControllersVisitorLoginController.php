<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class ControllersVisitorLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/login';
    protected $redirectAfterLogout = '/login';
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function showLoginForm()
    {
        return view('visitor.auth.login');
    }
    protected function guard()
    {
        return Auth::guard('visitor');
    }
}
