<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view(
        'jobs.index',
        [
            'jobs' => Job::all()
        ]
    );
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::findOrFail($id);

    return view(
        'jobs.show',
        [
            'job' => $job
        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});
