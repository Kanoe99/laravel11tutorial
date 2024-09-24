<?php

namespace App\Http\Controllers;

use App\Http\RegisteredUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::default(), 'confirmed'],
            // 'password' => ['required', Password::min(8)->max(255)->letters()->numbers()->mixedCase()->symbols(), 'confirmed'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }

}
