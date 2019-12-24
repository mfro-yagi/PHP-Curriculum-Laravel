<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel edit</title>
</head>
<body>

@section('content')

<form action="update/{{$data->id}}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    <label><input type="number" name="title" placeholder="チャンネル" value="{{ $data->title }}" required></label><br>
    <label><input type="text" name="broadcaster" placeholder="テレビ局" value="{{ $data->broadcaster }}" required></label><br>
    <p>
        <input type="radio" name="public_broadcast" value=1>公共放送
        <input type="radio" name="public_broadcast" value=0>民放
    </p>
    <input type="submit" value="SEND">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

@endsection

</body>
</html>
