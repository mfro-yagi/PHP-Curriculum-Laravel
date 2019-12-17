<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel index</title>
</head>
<body>


<table class="table table-striped">
    <tr>
        <th>チャンネル</th>
        <th>テレビ局</th>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>{{ $gather->title }}</td>
            <td>{{ $gather->description }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
