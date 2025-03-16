<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(RequestLogin $request)
    {
        if ($request->attemptLogin()) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Usuário ou senha inválidos.');
        }
    }
}
