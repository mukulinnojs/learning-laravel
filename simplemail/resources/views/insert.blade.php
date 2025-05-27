<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Operation</title>
</head>

<body>


    <form action="{{route('insertData')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" placeholder="Enter Your Name" id="name" name="name">
        <label for="name">Age</label>
        <input type="number" placeholder="Enter Your Age" id="age" name="age">
        <button type="submit">Submit To DB</button>
    </form>
</body>

</html>