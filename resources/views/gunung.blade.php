@extends('template')
@section('konten')

    <div class="jumbotron jumbotron-fluid bg-cover"
        style="background-image: url({{ asset('img/gunung/gunung2.jpg') }});">
        <div class="container text-center" style="margin-top: 80px;">
            <h1 class="display-4 text-white" id="hero-text">Mount Pesawaran</h1>
            <p class="lead text-white d-inline-block">Indonesia Itu Indah, <br />Mari kita Ketempat yang Belum Pernah
                Kita Kunjungi.</p>
        </div>
    </div>
    </section>

    <section class="section-populer-mountain">
        <div class="container">
            <p class="text-uppercase font-raleway mb-1 text-warning">Where To Go</p>
            <h3 class="mb-4">Populer Mountain</h3>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunungg.jpg') }}" alt="Rajawali"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Rajawali</h5>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunung1.jpg') }}" alt="Betung"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Betung</h5>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunung2.jpg') }}" alt="Pesawaran"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Pesawaran</h5>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/3.jpg') }}" alt="Sukmahilang"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Sukmahilang</h5>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
