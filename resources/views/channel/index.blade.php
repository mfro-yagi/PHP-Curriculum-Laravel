<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel index</title>
</head>
<body>
<ul>
    @foreach($data as $d)
        <li>{{$d->description}}</li>
    @endforeach
</ul>
</body>
</html>
