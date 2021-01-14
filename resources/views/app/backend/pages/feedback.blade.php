@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Feedback')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tanggapan</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card shadow p-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Tgl</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!count($feedbacks))
                    <tr>
                        <td colspan="7" align="center">Belum ada tanggapan.</td>
                    </tr>
                    @else
                    @foreach($feedbacks as $key => $feedback)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->subject }}</td>
                        <td>{{ $feedback->message }}</td>
                        <td>{{ $feedback->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('feedback.delete', ['id' => $feedback->id]) }}" class="btn btn-sm btn-outline-danger rounded-pill pl-3 pr-3"><i class="fas fa-trash"></i></a href="{{ route('feedback.delete', ['id' => $feedback->id]) }}">
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection