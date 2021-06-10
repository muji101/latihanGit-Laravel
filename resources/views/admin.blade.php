<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @include('layouts.nav')

    <h1>Welcome | {{ $admin }}</h1>
    @unless (empty($admin))
        name isn't empty
    @endunless
    <br>
    @if ($admin)
        hai {{ $admin }}
    @endif
    <br>
    @isset($admin)
        admin telah di set
    @endisset

    @switch($admin)
        @case('Joko')
            <h1>Hai Joko</h1>
            @break
        @case('Muj')
            <h1>Hai Muji</h1>
            @break
        @default
            <h1>Belum terdapat aksi</h1>
    @endswitch
</body>
</html>