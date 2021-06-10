<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>@yield('title','SMA 45 Pancasila')</title>
    </head>
    <body>
        @include('layouts.nav')
        <center><h1 class="fw-bold m-4">SMA 45 Pancasila</h1></center>
        <div class="container">
            <div class="d-flex flex-wrap">
                {{-- @section('content') --}}
                @foreach ( $student as $data )

    
                <div class="card m-2 shadow" style="width: 18rem;">
                    <img src="{{ $data->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $data->name }}</h5>
                        <h6 class="card-text">Usia : {{ $data->age }} Tahun.</h6>
                        <p class="card-text">Alamat : {{ $data->address }}</p>
                        <p class="card-text">Agama : {{ $data->religion }}</p>
                        <p class="card-text">Kelas : {{ $data->class }}</p>
                        <p class="card-text">Gender : {{ $data->gender }}</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
                
                @endforeach
                {{-- @endsection --}}
            </div>
            <hr>
            <div class="">
                @php
                    $a = 10;
                    $b = 7;
                @endphp
                @if ($a > $b)
                    Anda dinyatakan lulus ujian
                @else
                    Anda dinyatakan tidak lulus ujian
                @endif
            </div>
            <hr>
            <div class="">
                <form action="{{ route('admin') }}" method="post">
                    @csrf
                    <input type="text" placeholder="Name">
                    <input type="password" placeholder="Password">
                    <button>Login</button>
                </form>
            </div>
            <hr>
            <div class="">
                @for ($i = 0; $i < 10; $i++)
                    {{ $i }}
                @endfor
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>