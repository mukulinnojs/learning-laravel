<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite('resources/css/app.css')

</head>

<body>

    <!-- We Used Route Prefix grouping here -->
    <a href="{{ route('companypage') }}" class="text-purple-500 underline">Visit Our Company Page</a>
    <br>
    <a href="{{ route('orgpage') }}" class="text-purple-500 underline">Visit Our Organization Page</a>
</body>

</html>