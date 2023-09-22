<?php

use Illuminate\Support\Facades\Route;
use Jibon\Jobs\Http\Controller\JobController;
Route::group(['middleware' => ['web']], function () {
    Route::get('/my_resume', [JobController::class, 'myResumeShow']);
    Route::post('/my_resume', [JobController::class, 'myResumeStore'])->name('resume.create');
    Route::get('/new_job', [JobController::class, 'createNewJob']);
    Route::post('/new_job', [JobController::class, 'storeNewJob'])->name('job.create');
    
    Route::get('/created_job', [JobController::class, 'createdJob']);
    Route::get('/applied_job', [JobController::class, 'appliedJob']);
});
