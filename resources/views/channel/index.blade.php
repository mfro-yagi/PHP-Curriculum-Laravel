<head>
    <title>Laravel Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
    <div class="row">
        <div class="col-md-12">
            <h3 class="ops-title">チャンネル一覧</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <table class="table text-center">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">チャンネル番号</th>
                    <th class="text-center">TV局</th>
                </tr>
                <?php
                require('sample\App\Http\Controllers\ChannelsController.php');
                $channels = App\Http\Controllers\ChannelsController ?>
                <?php foreach($channels as $channel): ?>
                    <tr>
                        <td><?php echo $channel['id']; ?></td>
                        <td><?php echo $channel['title']; ?></td>
                        <td><?php echo $channel['description']; ?></td>
{{--                        <td>{{ $channel->id }}</td>--}}
{{--                        <td>{{ $channel->title }}</td>--}}
{{--                        <td>{{ $channel->description }}</td>--}}
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>