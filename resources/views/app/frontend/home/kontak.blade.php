@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Kontak')
@section('content')
<section class="Kontak" id="Kontak">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="down-services">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="left-content">
                                <h4 style="font-size: 25px">Hubungi Kami</h4>
                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar" role="progressbar" style="width: 100%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card bg-light mb-3r" style="max-width: 540px; padding-top: 30px">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="{{ asset('images/slider/logolab.png') }}" class="card-img" alt="Responsive-img">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text text-center" style="font-size: 20px; color: black; padding-top: 50px">FIK-Laboratorium Universitas Pembangunan Nasional Veteran Jakarta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 45rem; padding-top: 30px">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="font-size: 20px; color: grey"><i class="fa fa-envelope" aria-hidden="true">labfik@upnvj.ac.id</i></li>
                                        <li class="list-group-item" style="font-size: 20px; color: grey"><i class="fa fa-phone-square" aria-hidden="true">(021) 7656971</i></li>
                                        <li class="list-group-item" style="font-size: 20px; color: grey"><i class="fa fa-building" aria-hidden="true">Jl. RS. Fatmawati Raya No.1, RT.1/RW.1, Pd. Labu, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430</i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" style="padding-left: 30px">
                            <h4 style="font-size: 25px">Tinggalkan Pesan</h4>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 100%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <form action="{{ route('app.record') }}" method="post">
                                @csrf
                                <div class="input-group mb-3" style="padding-top: 30px">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                    </div>
                                    <input name="name" type="text" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3" style="padding-top: 30px">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                    </div>
                                    <input name="email" type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3" style="padding-top: 30px">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                    </div>
                                    <input name="subject" type="text" class="form-control" placeholder="Subject" aria-label="Subject" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3" style="padding-top: 30px">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                    </div>
                                    <textarea name="message" class="form-control" id="" cols="50" rows="5" placeholder="Tulis pesan kamu di sini..."></textarea>
                                </div>
                                <input class="btn btn-primary" onclick="alert('Thanks for your feedback')" type="submit" value="Submit" style="margin-top: 30px">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection