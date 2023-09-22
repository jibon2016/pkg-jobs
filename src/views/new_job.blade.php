@extends('Job::layout')

@section('title')
    Create a  new Job
@endsection

@section('content')
        @include('Job::sidebar')
    <div class="col-8">
        <div class="row bg-white py-4 px-3 text-secondary">
            <h3 class=" fs-3">Post a Job</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form action="{{ route('job.create') }}" class="py-3"     method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="row pb-4">
                    <div class="col-md-12">
                        <label for="companyName" class="form-label">Company Name <span class="text-danger">*</span></label>
                        <input required type="text" name="company_name" placeholder="Enter Company Name" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-12">
                        <label for="jobTitle" class="form-label">Job Title<span class="text-danger">*</span></label>
                        <input required type="text" name="job_title" placeholder="Enter Job Title" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-12">
                        <label class="form-label">Job Description<span class="text-danger">*</span></label>
                        <textarea required type="text" name="job_description" placeholder="Job Description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label class="form-label">Requirment <span class="text-danger">*</span></label>
                        <input required type="text" name="requirment" placeholder="Enter Requirment" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label  class="form-label">Location <span class="text-danger">*</span></label>
                        <input required type="text" name="location" placeholder="Enter Location" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label for="experience" class="form-label">Experience <span class="text-danger">*</span></label>
                        <input required type="text" name="min_experience" placeholder="Minimum" class="form-control">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label  class="form-label"> </label>
                        <input required type="text" name="max_experience" placeholder="Maximum" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                        <input required type="text" name="role" placeholder="Role" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="industryType" class="form-label">Industry Type <span class="text-danger">*</span></label>
                        <input required type="text" name="industry_type" placeholder="Industry Type" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label for="imploymentType" class="form-label">Employment Type <span class="text-danger">*</span></label>
                        <input required type="text" name="employment_type" placeholder="Employment Type" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                        <input required type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label for="min_salary" class="form-label">Salary <span class="text-danger">*</span></label>
                        <input required type="text" name="salary_min" placeholder="Minimum" class="form-control">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label  class="form-label"> </label>
                        <input required type="text" name="salary_max" placeholder="Maximum" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-12">
                        <label for="keySkills" class="form-label">Key Skills <span class="text-danger">*</span></label>
                        <input required type="text" name="key_skills" placeholder="Skills" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class=" bg-danger btn text-white" type="submit" >
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
