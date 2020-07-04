<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pesona Pesawaran</title>

    <!-- Fonts -->
    <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@300;400;600&display=swap"
    rel="stylesheet">

    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
</head>

<body>

  @include('layouts.header')

    <section class="section">
       @yield('konten')
   </section>

   @include('layouts.footer')

<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
