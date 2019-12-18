<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>channel index</title>
</head>
<body>


<table class="table table-striped">

    <h1>Hello<{{<?php $word ?>}}!</h1>
    <tr>
        <th>チャンネル</th>
        <th>テレビ局</th>
    </tr>
    <?php @foreach($data as $d) ?>
    <tr>
        <td>{{<?php $d->title ?>}}</td>
        <td>{{<?php $d->description ?>}}</td>
    </tr>
    <?php @endforeach ?>

</table>

</body>
</html>



