<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Class Room | Home')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #1e6ec9
        }
    </style>
</head>

<body>
    @php
        $routeName = request()->route()->getName();
    @endphp
    @include('_partials/navbar', ['routeName' => $routeName])
    {{-- <h1>{{ $routeName }}</h1> --}}
    <div class="container-fluid">
        @if (session('status'))
            <div @class([
                'my-3',
                'alert',
                'alert-success' => !str_starts_with(session('status'), 'deleted'),
                'alert-danger' => str_starts_with(session('status'), 'deleted'),
            ]) class="  my-3">{{ session('status') }}</div>
        @endif
        @yield('content')
    </div>
    {{-- @include('_partials/footer') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
