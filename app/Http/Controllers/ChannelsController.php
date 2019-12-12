<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Support\Facades\DB;

class ChannelsController extends Controller
{

    public function index()
    {
        // DBよりChannelテーブルの値を全て取得
        $channels = Channel::all();

//        $channels_insert = Channel::insert("INSERT INTO channels (title, description, published_flg, created_at, updated_at)
//VALUES (?, ?, ?, ?, ?)", [3,'埼玉テレビ', true, now(), now()]);
        DB::table('channels')->insert([
            'title' => 3,
            'description' => '埼玉テレビ',
            'published_flg' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $users = DB::table('channels')->select('title', 'description')->get();

        $channel1 = DB::table('channels')->where('title', 1)->first();

        DB::table('shop')
            ->join('item','shop.item_id', '=', 'item.item_id')
            ->select('shop.shop_name',
                'shop.item_id',
                'item.item_name',
                'item.price',
                'shop.quantity',
                'shop.created',
                'shop.modified')
            ->get();

        DB::table('item') -> where('price', '>=', 5000) -> get();
        DB::table('shop') -> whereDate('created_at', '2019-11-27') -> get();
        DB::table('shop') -> whereDay('created_at', '27') -> get();
        DB::table('shop') -> wheretime('created_at', '16:43:20') -> get();

        DB::table('channels')->where('title', 2)->update(['published_flg' => true]);

        $shinjuku = DB::table('shop')-> where('shop_name', '新宿') ->select('item_id') -> get();

        DB::table('shop_b')->where('shop_name', '天王寺')->select('item_id') -> union($shinjuku) -> get();

        //null判定
        DB::table('shop_b') -> whereNull('shop_name') -> get();


        // 取得した値をビュー「channel/index」に渡す
        //return view('channel.index', ['channels' => $channels]);

        return "Saved";

//        $channels = Channel::all();
//        return $channels;
    }

}
