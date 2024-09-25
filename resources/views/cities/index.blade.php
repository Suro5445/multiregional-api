<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
<main>
    <h2>Select the city:</h2>
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

</body>
</html>
