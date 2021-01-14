@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Edit Class')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Class</h1>
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
                        Perbarui Data Kelas
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update', ['class' => $class->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Gambar</label>
                            <input name="image" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kelas</label>
                                <input name="class_name" type="text" class="form-control" value="{{ $class->class_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $class->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Matakuliah</label>
                                <input name="courses" type="text" class="form-control" value="{{ $class->courses }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kepala Lab</label>
                                <input name="head_lab" type="text" class="form-control" value="{{ $class->head_lab }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Teknisi Lab</label>
                                <input name="technician" type="text" class="form-control" value="{{ $class->technician }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ruangan</label>
                                <input name="room" type="text" class="form-control" value="{{ $class->room }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input name="capacity" type="text" class="form-control" value="{{ $class->capacity }}" required>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection