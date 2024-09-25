<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;

class JobController extends Controller
{
    public function index(Job $job)
    {
        $job = Job::with('employer')->latest()->simplePaginate(10);

        return view(
            'jobs.index',
            [
                'jobs' => $job
            ]
        );
    }
    public function show(Job $job)
    {
        return view(
            'jobs.show',
            [
                'job' => $job
            ]
        );
    }
    public function create()
    {
        return view('jobs.create');
    }


    public function store(User $user)
    {
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
    }

    public function edit(Job $job)
    {
        return view(
            'jobs.edit',
            [
                'job' => $job
            ]
        );
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ], [
            'title.min' => '3 letters is minimum!',
            'salary.required' => 'Provide any value for the salary field!',
        ]);



        $job->title = request('title');
        $job->title = request('salary');

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect("/jobs/" . $job->id);
    }

    public function destroy(Job $job)
    {

        $job->delete();

        return redirect("/jobs");
    }
}
