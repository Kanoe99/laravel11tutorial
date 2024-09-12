<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->simplePaginate(10);

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
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ], [
        'title.min' => '3 letters is minimum!',
        'salary.required' => 'Provide any value for the salary field!',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
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


Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ], [
        'title.min' => '3 letters is minimum!',
        'salary.required' => 'Provide any value for the salary field!',
    ]);

    //authorize (on hold...)

    $job = Job::findOrFail($id);

    $job->title = request('title');
    $job->title = request('salary');

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect("/jobs/" . $job->id);

});

Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();

    return redirect("/jobs");
});

Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::findOrFail($id);

    return view(
        'jobs.edit',
        [
            'job' => $job
        ]
    );
});