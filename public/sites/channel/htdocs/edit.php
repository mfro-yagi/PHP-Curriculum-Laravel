<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel index</title>
</head>
<body>



<form action="res" method="post">
    <input type="input" name="name">
    <input type="input" name="email">
    <input type="submit" value="SEND">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

</body>
</html>



