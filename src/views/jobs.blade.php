@extends('Job::layout')

@section('title')
    All Jobs
@endsection

@section('content')
    @include('Job::sidebar')
        <div class="col-8">
            <div class="row bg-white py-4 px-3 text-secondary">
                <div class="col-md-">
                    @foreach($jobs as $job)
                        <div class="row border-bottom py-3">
                            <div  class="">
                                <span class="badge text-bg-success mb-2">Approved</span>
                                <h6>{{$job->company_name}}</h6>
                                <p class="fs-6"><i  class=" fa-solid fa-briefcase"></i>    -   <i class="fs-8 fa-solid fa-location-dot"></i> {{$job->location}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
