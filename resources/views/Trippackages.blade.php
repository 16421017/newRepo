@extends('template')
@section('konten')

<div class="jumbotron jumbotron-fluid bg-cover"
style="background-image: url({{ asset('img/trip/4.jpg') }});">
<div class="container text-center" style="margin-top: 80px;">
    <h1 class="display-4 text-white" id="hero-text">Pesawaran</h1>
    <p class="lead text-white d-inline-block">Indonesia Itu Indah, <br />Mari kita Ketempat yang Belum Pernah
    Kita Kunjungi.</p>
</div>
</div>
<section id="contact" class="contact">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h2>Package Solo Trevel</h2>
            </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-sm">
                <div class="card border" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Package 2jt Wisata Pantai</h5>
                    <p class="card-title">selama 2 hari</p>
                    <p class="card-text">penginapan</p>
                    <p class="card-text">Paket Makan pagi,siang,Malam</p>
                    <p class="card-text">Kapal ke Pulau</p>
                    <p class="card-text">Alat Snorkeling</p>
                    <p class="card-text">Dokumentasi</p>
                    <p class="card-text">Paket di dapatkan setelah pembayaran</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card border" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Paket 3jt Wisata Pantai</h5>
                <p class="card-title">selama 4 hari</p>
                <p class="card-text">penginapan</p>
                <p class="card-text">Paket Makan pagi,siang,Malam</p>
                <p class="card-text">Kapal ke Pulau</p>
                <p class="card-text">Alat Snorkeling</p>
                <p class="card-text">Dokumentasi</p>
                <p class="card-text">Paket di dapatkan setelah pembayaran</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card border" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Paket 4jt Wisata Pantai</h5>
            <p class="card-title">selama 7 hari</p>
            <p class="card-text">penginapan</p>
            <p class="card-text">Paket Makan pagi,siang,Malam</p>
            <p class="card-text">Kapal ke Pulau</p>
            <p class="card-text">Alat Snorkeling</p>
            <p class="card-text">Dokumentasi</p>
            <p class="card-text">Paket di dapatkan setelah pembayaran</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card border" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Package 1,5jt Pendakian Gunung </h5>
            <p class="card-title">selama 2 hari</p>
            <p class="card-text">penginapan</p>
            <p class="card-text">Paket Makan pagi,siang,Malam</p>
            <p class="card-text">Kapal ke Pulau</p>
            <p class="card-text">Alat Snorkeling</p>
            <p class="card-text">Dokumentasi</p>
            <p class="card-text">Paket di dapatkan setelah pembayaran</p>

            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div class="col-sm">
    <div class="card border" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Package 2jt Pendakian Gunung</h5>
        <p class="card-title">selama 4 hari</p>
        <p class="card-text">penginapan</p>
        <p class="card-text">Paket Makan pagi,siang,Malam</p>
        <p class="card-text">Kapal ke Pulau</p>
        <p class="card-text">Alat Snorkeling</p>
        <p class="card-text">Dokumentasi</p>
        <p class="card-text">Paket di dapatkan setelah pembayaran</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</div>
<div class="col-sm">
    <div class="card border" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Package 2,5jt Pendakian Gunung</h5>
        <p class="card-title">selama 7 hari</p>
        <p class="card-text">penginapan</p>
        <p class="card-text">Paket Makan pagi,siang,Malam</p>
        <p class="card-text">Kapal ke Pulau</p>
        <p class="card-text">Alat Snorkeling</p>
        <p class="card-text">Dokumentasi</p>
        <p class="card-text">Paket di dapatkan setelah pembayaran</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-body">Contact Us</div>

          <p class="card-text">Silahkkan hubungi kami melalui pesan atau datang langsung ke alamat kami</p>
      </div>
      <ul class="list-group">
        <li class="list-group-item"><h1>Location</h1></li>
        <li class="list-group-item">My Office</li>
        <li class="list-group-item">Jl. Sukardihamdani Palapa Tengah</li>
        <li class="list-group-item">Pesawaran Lampung</li>
    </ul>
</div>
<div class="col-lg-6">
    <form>
       <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" id="nama">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="no telp">no telp</label>
        <input type="text" class="form-control" id="no telp">
    </div>
    <div class="form-group">
        <label for="pesan">pesan</label>
        <textarea name="text" id="pesan" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="button" class=" btn btn-primary">kirim pesan</button> 

 </form>
</div>
</div>
</div> 
<div class="card border" style="width: 240px">
  <div class="card-body">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31762.49054238393!2d105.20665933843404!3d-5.668047031033395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4125615c897003%3A0x8307d0a223c4a639!2sPulau%20Pahawang%2C%20Punduh%20Pidada%2C%20Kabupaten%20Pesawaran%2C%20Lampung!5e0!3m2!1sid!2sid!4v1593778805467!5m2!1sid!2sid" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
</div>
</div>
@endsection
