<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $job = Job::with('employer')->cursorPaginate(3);

    return view(
        'jobs.index',
        [
            'jobs' => $job
        ]
    );
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    //validation goes here
});


Route::get('/contact', function () {
    return view('contact');
});


//wild cards at the bottom!
Route::get('/jobs/{id}', function ($id) {

    $job = Job::findOrFail($id);

    return view(
        'jobs.show',
        [
            'job' => $job
        ]
    );
});