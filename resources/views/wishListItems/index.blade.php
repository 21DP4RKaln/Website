<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wish List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Wish List</h1>
        <ul>
            @foreach($wishListItems as $item)
                <li>{{ $item->title }} - {{ $item->description }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

