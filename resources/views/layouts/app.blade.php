<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>
        @yield('title')
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('articles.index') }}">{{ __('common.article') }}</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('categories.index') }}">{{ __('common.category') }}</a>
                </li>
            </ul>
        </div>
        <div>
            <a class="text-white" href="{!! route('lang', ['vi']) !!}">{{ __('common.vi') }} |</a>
            <a class="text-white" href="{!! route('lang', ['en']) !!}">{{ __('common.en') }}</a>
        </div>
    </nav>
    <div class="w-50 container mt-auto">
        @yield('content')
    </div>
</body>

</html>
