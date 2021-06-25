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
                        <form method="post" action="{{ route('faculties.store') }}" enctype="multipart/form-data"
                            class="form-horizontal">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Name</label>
                                <div class="col-md-8">
                                    <input name="name" type="text" placeholder="faculty name and initial"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Email</label>
                                <div class="col-md-8">
                                    <input name="email" type="email" placeholder="course code" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-8 control-label">Course Material</label>
                                <div class="col-md-8">
                                    <input name="material" type="file" class="form-control">
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
