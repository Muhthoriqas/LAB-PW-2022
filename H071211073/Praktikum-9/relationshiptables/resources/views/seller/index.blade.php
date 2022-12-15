<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($seller as $item)
    <h1>{{ $item->name }}</h1>
    <h1>{{ $item->address }}</h1>
    <h1>{{ $item->gender }}</h1>
    <h1>{{ $item->no_hp }}</h1>
    <h1>{{ $item->status }}</h1>
    @endforeach
</body>
</html>