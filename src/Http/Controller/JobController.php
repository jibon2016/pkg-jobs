<?php

namespace Jibon\Jobs\Http\Controller;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jibon\Jobs\Models\Job;
use Jibon\Jobs\Models\User;

class JobController extends Controller
{
    public function myResumeShow()
    {
        $data['menu'] = 'my_resume';
        return view('Job::my_resume', $data);
    }

    public function myResumeStore(Request $request)
    {
        $request->validate([
                            'first_name' =>'required',
                            'last_name' =>'required',
                            'image' =>'required|file',
                            'profession' =>'required',
                            'language' =>'required',
                            'country' =>'required',
                            'state' =>'required',
                            'city' =>'required',
                            'address' =>'required',
                            'email' =>'required',
        ]);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image =$file->storeAs('/public/users/', $filename);
        }
                                    User::create([
                                            'first_name' => $request->first_name,
                                            'last_name' => $request->last_name,
                                            'image' => $image,
                                            'profession' => $request->profession,
                                            'language' => $request->language,
                                            'country' => $request->country,
                                            'state' => $request->state,
                                            'city' => $request->city,
                                            'phone' => $request->phone,
                                            'address' => $request->address,
                                            'email' => $request->email,
                                    ]);
                    return redirect()->back()->with('success' , 'Data Inserted');
    }

    public function createNewJob()
    {
        $data['menu'] = 'new_job';
        return view('Job::new_job', $data);
    }

    public function storeNewJob(Request $request)
    {
        $request->validate([
            'company_name' =>'required',
            'job_title' =>'required',
            'job_description' =>'required',
            'requirment' =>'required',
            'location' =>'required',
            'min_experience' =>'required',
            'max_experience' =>'required',
            'role' =>'required',
            'industry_type' =>'required',
            'employment_type' =>'required',
            'salary_min' =>'required',
            'salary_max' =>'required',
            'key_skills' =>'required',
            'image' =>'required|file',
        ]);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image =$file->storeAs('/public/company/', $filename);
        }
        Job::create([
            'user_id' => 1,
            'company_name'      => $request->company_name,
            'job_title' => $request->job_title,
            'company_image' => $image,
            'job_description' => $request->job_description,
            'requirement' => $request->requirment,
            'location' => $request->location,
            'min_experience' => $request->min_experience,
            'max_experience' => $request->max_experience,
            'role' => $request->role,
            'industry_type' => $request->industry_type,
            'employment_type' => $request->employment_type,
            'salary_min' => $request->salary_min,
            'salary_max' => $request->salary_max,
            'key_skills' => $request->key_skills,
        ]);
        return redirect()->back()->with('success' , 'Data Inserted');
    }

    public function createdJob()
    {
        $data['menu'] = 'created_job';
        $data['jobs'] = Job::all();
        return view('Job::jobs', $data);
    }

    public function appliedJob()
    {
        $data['menu'] = 'applied_job';
        $data['jobs'] = Job::all();
        return view('Job::applied_jobs', $data);
    }
}
