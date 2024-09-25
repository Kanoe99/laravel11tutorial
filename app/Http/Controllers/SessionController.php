<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(User $user)
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, wrong credentials!'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
