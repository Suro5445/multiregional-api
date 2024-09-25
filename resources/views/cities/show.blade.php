<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
<h1>
    You have selected : {{$currentCity->name}}
</h1>
<main style="padding-left: 20px">
    <h2>Select the city:</h2>
    <a href="{{ url($currentCity->slug . '/news') }}" class="btn btn-primary">News</a>
    <a href="{{ url($currentCity->slug . '/about') }}" class="btn btn-success">About</a>

    <ul>
    @foreach($cities as $city)
            <li>
                <a href="{{ url($city->slug) }}"
                   style="{{ session('city') === $city->slug ? 'font-weight: bold;' : '' }}">
                    {{ $city->name }}
                </a>
            </li>
        @endforeach
    </ul>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
