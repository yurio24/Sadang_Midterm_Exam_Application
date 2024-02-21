<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            margin-left: 50px;
        }

        .cons{
            text-align: center;
        }

        ul{
            list-style: none;
        }

    </style>
</head>
<body>
    <h1>Anime</h1>
<div class="cons">
    <p>Name: {{ $name }}</p>
    <p>Rating: {{ $rating }}</p>
    <p>Studio: {{ $studio }}</p>
</div>
<br>
<div class="cons">
    <p>Name: {{ $name1 }}</p>
    <p>Rating: {{ $rating1 }}</p>
    <p>Studio: {{ $studio1 }}</p>
</div>
</body>
</html>