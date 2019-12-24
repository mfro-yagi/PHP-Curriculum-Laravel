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
        <th>チャンネル</th>
        <th>テレビ局</th>
        <th>公共放送</th>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>{{ $d->title }}</td>
            <td>{{ $d->broadcaster }}</td>
            <td>{{ $d->public_broadcast }}</td>
            <td><a href="edit/{{$d->id}}" class="btn btn-primary btn-sm">編集</a></td>
        </tr>
    @endforeach
</table>

<br><br>

<form action="create" method="post">
    <label><input type="number" name="title" placeholder="チャンネル" required></label><br>
    <label><input type="text" name="broadcaster" placeholder="テレビ局" required></label><br>
    <p>
        <input type="radio" name="public_broadcast" value=1>公共放送
        <input type="radio" name="public_broadcast" value=0>民放
    </p>
    <input type="submit" value="SEND">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

</body>
</html>
