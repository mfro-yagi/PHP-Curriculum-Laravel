<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Channel;

class ChannelsController extends Controller
{

    public function index()
    {
        // DBよりChannelテーブルの値を全て取得
        $channels = Channel::all();

//        $channels_insert = Channel::insert("INSERT INTO channels (title, description, published_flg, created_at, updated_at)
//VALUES (?, ?, ?, ?, ?)", [3,'埼玉テレビ', true, now(), now()]);
        Channel::insert([
            'title' => 3,
            'description' => '埼玉テレビ',
            'published_flg' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Channel::where('title', 2)->update(['published_flg' => true]);

        // 取得した値をビュー「channel/index」に渡す
        return view('channel.index', ['channels' => $channels]);

        $channels = Channel::all();
        return $channels;
    }

}
