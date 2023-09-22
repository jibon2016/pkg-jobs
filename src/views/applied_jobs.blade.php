@extends('Job::layout')

@section('title')
    Applied Jobs
@endsection

@section('content')
    @include('Job::sidebar')
    <div class="col-8">
        <div class="row bg-white py-4 px-3 text-secondary">
            <div class="col-md-">
                    <div class="row ">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Company  Name</th>
                                <th scope="col">Job  Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                                        @foreach($jobs as $job)
                                                            <tr>
                                                                <th>{{ $loop->iteration }}</th>
                                                                <td>{{ $job->company_name }}</td>
                                                                <td>{{ $job->job_title }}</td>
                                                                <td>{{ $job->created_at->diffForHumans() }}</td>
                                                                <td>None</td>
                                                            </tr>
                                                        @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection
