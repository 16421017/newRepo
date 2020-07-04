@extends('template')
@section('konten')

<div class="jumbotron jumbotron-fluid bg-cover"
style="background-image: url({{ asset('img/pantai/18.jpg') }});">
<div class="container text-center" style="margin-top: 80px;">
    <h1 class="display-4 text-white" id="hero-text">Pesawaran</h1>
    <p class="lead text-white d-inline-block">Indonesia Itu Indah, <br />Mari kita Ketempat yang Belum Pernah
    Kita Kunjungi.</p>
    <button type="button" class="mx-auto d-block btn btn-warning btn-lg">Explore Now</button>
</div>
</div>

<section class="section-populer-beach">
    <div class="container">
        <p class="text-uppercase font-raleway mb-1 text-warning">Where To Go</p>
        <h3 class="mb-4">Populer Beach</h3>

        <div class="row">
            <div class="col">
                <div class="card border-0">
                    <img src="img/beach/21.png"  width="300" height="300" class="rounded" alt=""p">
                </div>
            </div>



            <div class="col">
                <div class="card border-0" >
                    <img src="img/beach/12.jpg"  width="300" height="300" class="rounded" alt=""p">
                </div>
            </div>

            <div class="col">
                <div class="card border-0">
                    <img src="img/pantai/Ringgung2.jpg"  width="300" height="300" class="rounded" alt=""">
                </div>
            </div>

            <div class="container">
                <p class="text-uppercase font-raleway mb-1 text-warning">
                    <div class="row">
                        <div class="col">
                            <div class="card border-0">
                                <img src="img/beach/4.jpeg"  width="300" height="300" class="rounded" alt="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-0">
                                <img src="img/beach/5.jpeg"  width="300" height="300" class="rounded" alt="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-0">
                                <img src="img/beach/6.jpeg"  width="300" height="300" class="rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-populer-mountain">
    <div class="container">
        <p class="text-uppercase font-raleway mb-1 text-warning">Where To Go</p>
        <h3 class="mb-4">Populer Mountain</h3>

        <div class="container pt-3">

         <div class="row">
            <div class="col">
                <div class="card border-0">
                    <img src="img/gunung/gunung1.jpg"class="card-img-top" >
                </div>
            </div>

            <div class="col">
                <div class="card border-0" >
                    <img src="img/gunung/gunung2.jpg"class="card-img-top">
                </div>
            </div>

            <div class="col">
                <div class="card border-0">
                    <img src="img/gunung/gunungg.jpg" class="card-img-top">
                </div>
            </div>

            <div class="container">
                <p class="text-uppercase font-raleway mb-1 text-warning">
                    <div class="container pt-3">
                        <div class="row">
                            <div class="col">
                                <div class="card border-0">
                                    <img src="img/gunung/2.jpg"class=width="300" height="300" class="rounded" alt="" >
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-0">
                                    <img src="img/gunung/3.jpg"class=width="300" height="300" class="rounded" alt="" >
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-0">
                                    <img src="img/gunung/4.jpg"class=width="300" height="300" class="rounded" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
