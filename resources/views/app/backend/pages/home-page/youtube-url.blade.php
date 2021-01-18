@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Home page CMS')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Modify Video Content</h1>
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
                        Modify URL
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.video') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Video URL</label>
                                <input name="youtube_url" type="text" class="form-control" required value="{{ $current->youtube_url }}">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection