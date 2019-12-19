<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel index</title>
</head>
<body>


<table class="table table-striped">

    <h1>Hello{{<?php //echo $word; ?>}}!</h1>
    <tr>
        <th>チャンネル</th>
        <th>テレビ局</th>
        <th>公共放送</th>
    </tr>
    <?php foreach($data as $d): ?>
    <tr>
        <td>{{<?php $d->title ?>}}</td>
        <td>{{<?php $d->broadcaster ?>}}</td>
        <td>{{<?php $d->public_broadcast ?>}}</td>
    </tr>
    <?php endforeach; ?>

</table>


<form action="res" method="post">
    <input type="input" name="name">
    <input type="input" name="email">
    <input type="submit" value="SEND">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

</body>
</html>



