<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>shop index</title>
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
            <td>{{<?php $d->shop_name ?>}}</td>
            <td>{{<?php $d->item_name ?>}}</td>
            <td>{{<?php $d->quantity ?>}}</td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
