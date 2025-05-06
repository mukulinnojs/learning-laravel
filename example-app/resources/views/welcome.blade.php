<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources\css\app.css')
</head>

<body>
    <h1>Welcome Page</h1>
    <p class="text-red-400">Does it change automatically ?</p>
    <p class="text-red-400">Does it change automatically ?</p>
    <a href="{{ url('/home') }}" class="hover:underline hover:text-purple-500">Visit Homepage</a>
</body>

</html>