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

        // 取得した値をビュー「book/index」に渡す
        return view('channel/index', compact('channels'));
    }

}
