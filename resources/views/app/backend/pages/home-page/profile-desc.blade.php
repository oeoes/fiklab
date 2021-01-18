@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Home page CMS')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Modify Profile Tab</h1>
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
                        Modify Text
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.profile_tab') }}" method="post">
                            @csrf
                            @php
                            $current_arr = explode('|', $current->profile_section);
                            @endphp
                            <div class="form-group">
                                <label for="">Title</label>
                                <input name="title" type="text" class="form-control" required value="{{ $current_arr[0] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Subtitle</label>
                                <textarea class="form-control" name="subtitle" id="" cols="30" rows="10">{{ $current_arr[1] }}</textarea>
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