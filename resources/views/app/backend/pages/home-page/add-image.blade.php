@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Home page CMS')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Modify Slider</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow">
                    <div class="card-header">
                        Add slider image
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.slider') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Image</label>
                                <input name="image" type="file" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input name="title" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Sub title</label>
                                <input name="subtitle" type="text" class="form-control" required>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection