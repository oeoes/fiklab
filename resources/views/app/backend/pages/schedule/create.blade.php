@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Upload Jadwal Praktikum')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Upload Jadwal Praktikum</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Upload Jadwal Praktikum
                    </div>
                    <div class="card-body">
                        <form action="{{ route('schedule.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input name="image" type="file" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input name="title" type="text" class="form-control" required>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection