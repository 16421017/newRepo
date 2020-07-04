@extends('layouts.template')
@section('konten')

  <div class="jumbotron jumbotron-fluid bg-cover" style="background-image: url({{ asset('img/prise/buku.jpeg') }});">
    <div class="container text-center" style="margin-top: 80px;">
        <h1 class="display-4 text-white" id="hero-text">Blog Pesawaran</h1>
        <p class="lead text-white d-inline-block">Indonesia Itu Indah, <br />Mari kita Ketempat yang Belum Pernah
            Kita Kunjungi.</p>
    </div>
  </div>

  <div class="container blog">
    <div class="row mb-2">
      <div class="col-lg-6">
        <div class="section_title">
          <h3>Popular Artikel</h3>
        </div>
      </div>
    </div>

    <div class="card border-0 mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/blog/3.jpg" class="card-img img-fluid">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">GEOGRFI</h5>
            <p class="card-text">Kabupaten Pesawaran merupakan daerah penyangga Ibu kota Provinsi Lampung. Secara keseluruhan luas wilayah Kabupaten Pesawaran adalah.</p>
            <a href="geografi" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card border-0 mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/blog/2.jpg" class="card-img img-fluid">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">SEJARAH</h5>
            <p class="card-text">Kabupaten Pesawaran terbentuk melalui tahapan proses perjuangan yang cukup panjang, diawali sebelum Provinsi Lampung memisahkan diri dari Provinsi Sumatra Selatan sebagaimana tercatat dalam sejarah sebagai berikut:</p>
            <a href="deskripsi.html" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card border-0 mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/blog/4.jpg" class="card-img img-fluid">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Populasi Penduduk</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="deskripsi.html" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card border-0 mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/blog/5.jpg" class="card-img img-fluid">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Keanekaragaman Budaya</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="deskripsi.html" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection