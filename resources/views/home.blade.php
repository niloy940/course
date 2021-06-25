@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('create.course') }}" class="float-right btn btn-primary ml-2">
                            Create Course
                        </a>
                        <a href="{{ route('create.faculty') }}" class="float-right btn btn-primary">
                            Create Faculty
                        </a>
                    </div>

                    <div class="card-body">
                        <h4>All Courses</h4>
                        <div>
                            @foreach ($courses as $course)
                                <a href="{{ route('courses.show', ['course' => $course->id]) }}">{{ $course->name }}</a>
                            @endforeach
                        </div>
                        <br>
                        <br>
                        <h4>All Faculties</h4>
                        <div>
                            @foreach ($faculties as $faculty)
                                <div>{{ $faculty->name }}</div>
                                <div>{{ $faculty->material }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
