<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1>This is the homepage</h1>
    <a href="{{ url('/') }}" class="text-blue-500 underline">Visit Welcome Page</a>
    <br>
    <a href="{{ url('/portfolio/Mukul/Dogra') }}" class="text-red-500 underline">Mukul's Portfolio</a>
    <br>
    <a href="{{ url('/portfolio/Akash/Nath') }}" class="text-purple-500 underline">Akash's Portfolio</a>
    <br>
    <br>
    <br>
    <a href="{{ route('testpage') }}" class="text-orange-500 underline">Named Routes Test</a>
</body>

</html>