<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>shop index</title>
</head>

<body>

<table class="table table-striped">

    <h1>Hello{{ $word }}!</h1>
    <tr>
        <th>店</th>
        <th>商品</th>
        <th>価格</th>
    </tr>
    <?php foreach($data as $d): ?>
        <tr>
            <td>{{ $d->shop_name }}</td>
            <td>{{ $d->item_name }}</td>
            <td>{{ $d->quantity }}</td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
