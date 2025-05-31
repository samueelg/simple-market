<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout(): RedirectResponse
    {
        session()->forget('user');
        return redirect()->to('/');
    }

    public function registerSubmit(Request $request)
    {
        $request->validate(
            [
                'text_name' => 'required',
                'text_email' => 'required|email',
                'text_password' => 'required|min:6|max:16',
            ],
            [
                'text_name.required' => 'É necessário preencher o nome',
                'text_email.email' => 'O endereço de e-mail deve ser valido',
                'text_email.required' => 'É necessário preencher campo de e-mail',
                'text_password.required' => 'É necessário preencher o campo de senha',

            ]
        );
    }
}
