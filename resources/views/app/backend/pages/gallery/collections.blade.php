@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Gallery')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ $parent->name }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <button data-toggle="modal" data-target="#add-more" class="btn btn-sm btn-outline-primary">Add more images<i class="fa fa-plus ml-2"></i></button>

                    <!-- Modal -->
                    <div class="modal fade" id="add-more" tabindex="-1" role="dialog" aria-labelledby="add-moreLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="add-moreLabel">Add Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('gallery.store_images') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="gallery_id" value="{{ $parent->id }}" class="form-control">
                                        <label for="">Select Image</label>
                                        <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="card" style="position: relative;">
                                    <img class="card-image-top" src="{{ asset('uploaded_file/gallery') }}/{{ $parent->image }}" alt="" style="max-width: 100%;">
                                    <div class="card-footer">
                                        <a href="" class="btn btn-outline-danger form-control" disabled>Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @foreach ($collections as $collection)
                            <div class="col-md-3 mb-2">
                                <div class="card" style="position: relative;">
                                    <img class="card-image-top" src="{{ asset('uploaded_file/gallery/collections') }}/{{ $collection->image }}" alt="" style="max-width: 100%;">
                                    <div class="card-footer">
                                        <a href="{{ route('gallery.delete_from_collections', ['image' => $collection->id]) }}" class="btn btn-outline-danger form-control">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $collections }}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-justify">
                        {{ $parent->description }}
                    </div>
                    <div class="mt-3">
                        <div class="btn btn-info"><i class="fas fa-calendar"></i> {{ $parent->date }}</div>
                        <div class="btn btn-primary"><i class="fas fa-clock"></i> {{ $parent->start_time }} s/d {{ $parent->end_time }}</div>
                        <div class="btn btn-success"><i class="fas fa-building"></i> {{ $parent->venue }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection