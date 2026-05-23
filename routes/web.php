<?php

use Illuminate\Support\Facades\Route;
use App\Models\ListJobs;


Route::get('/', function () {
    return redirect('/jobs');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'heading' => 'Job Listings', 
        'jobs' => ListJobs::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = ListJobs::find($id);

    if (!$job) {
        abort(404);
    }

    return view('job_detail', [
        'job' => $job
    ]);
});