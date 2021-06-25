@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('home') }}" class="float-right btn btn-primary mr-2">
                            Back
                        </a>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('courses.store') }}" class="form-horizontal">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Title</label>
                                <div class="col-md-8">
                                    <input name="title" type="text" placeholder="title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Code</label>
                                <div class="col-md-8">
                                    <input name="code" type="text" placeholder="course code" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Description</label>
                                <div class="col-md-8">
                                    <input name="description" type="text" placeholder="description" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Start Time</label>
                                <div class="col-md-8">
                                    <input name="start_time" type="text" placeholder="start time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">End Time</label>
                                <div class="col-md-8">
                                    <input name="end_time" type="text" placeholder="end time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
