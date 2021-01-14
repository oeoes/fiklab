@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Feedback')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Account Setting</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="h4">Pengaturan Akun</div>
                        <small class="text-muted">Perbarui informasi akun.</small>
                        <form action="{{ route('account.update') }}" class="mt-4" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input name="name" type="text" class="form-control" required value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="email" type="email" class="form-control" required value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Old Password</label>
                                <input name="old_password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sm btn-outline-primary ">Perbarui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection