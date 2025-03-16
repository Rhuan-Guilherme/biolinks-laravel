<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegister;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RequestRegister $request)
    {
        if ($request->tryToLogin()) {
            return to_route('dashboard');
        }

        return back()->withInput()->withErrors('Erro ao realizar cadasto. Tente novamente!');
    }
}
