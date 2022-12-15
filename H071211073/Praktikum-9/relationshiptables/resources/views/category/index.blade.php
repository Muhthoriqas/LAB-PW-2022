<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    @foreach ($category as $item)
    <h1>{{ $item->name }}</h1>
    <h1>{{ $product[$item->id -1]->name }}</h1>
    @endforeach
</body>
</html>