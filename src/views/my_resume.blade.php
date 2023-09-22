@extends('Job::layout')

@section('title')
    Create My Resume
@endsection

@section('content')
 @include('Job::sidebar')
    <div class="col-8">
        <div class="row bg-white py-4 px-3 text-secondary">
            <h3 class=" fs-3">Personal Information</h3>
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
            <form action="{{ route('resume.create') }}" class="py-3"     method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="row pb-4">
                    <div class="col-md-4">
                        <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input required type="text" name="first_name" placeholder="Enter First Name" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input required type="text" name="last_name" placeholder="Enter Last Name" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                        <input required type="file" name="image"  class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label for="profession" class="form-label">Profession <span class="text-danger">*</span></label>
                        <input required type="text" name="profession" placeholder="Enter Your Profession" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="language" class="form-label">Language <span class="text-danger">*</span></label>
                        <input required type="text" name="language" placeholder="Enter Your Language" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-4">
                        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                        <input required type="text" name="country" placeholder="Enter Your Country" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                        <input required type="text" name="state" placeholder="Enter Your State" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                        <input required type="text" name="city" placeholder="Enter Your City" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-12">
                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                        <input required type="text" name="address" placeholder="Enter Your Address" class="form-control">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                        <input required type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input required type="email" name="email" placeholder="Enter Your Email" class="form-control">
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
