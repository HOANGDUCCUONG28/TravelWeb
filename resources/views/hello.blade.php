<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hoc laravel buoi 1,2 </title>
</head>
<body>
    <h1>first class of laravel</h1>
    <div>hello class</div>
    <div>GetValue : {{$name}}!</div>
    <p>{{$str}}</p>

    @foreach ($result as $value)
        <p>{{$value->myname}}</p>
    @endforeach


</body>
</html>