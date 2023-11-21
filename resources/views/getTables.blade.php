<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chuyen tu database sang du lieu hien thi</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="ALL">
        @foreach ($resultALL as $value )
            <p> {{$value->name}} : {{$value->price }}</p>
        @endforeach 

    </div>
    <br>
    <br>
    <div class="WHERE">
        @foreach ($resultWHERE as $value )
            <p> {{$value->name}} : {{$value->price }}</p>
        @endforeach

    </div>
    <br>
    <br>
    <div class="FIND">
        <p>{{$resultFIND->name}}<p>

    </div>


    
</body>
</html>