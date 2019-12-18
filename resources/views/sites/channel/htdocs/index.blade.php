<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel index</title>
</head>
<body>


<table class="table table-striped">
    <h1>Hello{{$word}}!</h1>
    <tr>
        <th>チャンネル名</th>
        <th>テレビ局</th>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>{{ $d->title }}</td>
            <td>{{ $d->description }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
