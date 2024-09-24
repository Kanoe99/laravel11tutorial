<?php

namespace App\Http\Controllers;

use App\Http\RegisteredUser;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        dd(request()->all());
        // request()->validate([
        //     'title' => ['required', 'min:3'],
        //     'salary' => ['required'],
        // ], [
        //     'title.min' => '3 letters is minimum!',
        //     'salary.required' => 'Provide any value for the salary field!',
        // ]);

        // RegisteredUser::create([
        //     'name' => request('title'),
        //     'surname' => request('salary'),
        //     'email' => request('email'),
        //     'password' => request('password'),
        // ]);

        // return redirect('/jobs');
    }

}
